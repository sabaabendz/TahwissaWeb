<?php

namespace App\Service;

use App\Entity\Reclamation;
use App\Repository\ReclamationRepository;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * AI-powered support agent that reads user reclamations and provides
 * intelligent assistance.  When it cannot resolve a problem (refunds,
 * account changes, complex disputes) it escalates to admin.
 */
class ReclamationAgentService
{
    private const API_URL = 'https://openrouter.ai/api/v1/chat/completions';

    /** Topics the agent CANNOT handle – must escalate to admin. */
    private const ESCALATION_KEYWORDS = [
        'remboursement', 'refund', 'rembourser',
        'supprimer mon compte', 'delete account',
        'modifier ma réservation', 'changer ma réservation',
        'litige', 'dispute', 'fraude', 'fraud',
        'mot de passe', 'password',
        'données personnelles', 'personal data',
        'bug critique', 'erreur serveur',
    ];

    public function __construct(
        private HttpClientInterface   $httpClient,
        private ReclamationRepository $reclamationRepository,
        private string                $openRouterApiKey,
    ) {}

    /**
     * Chat with the AI agent in the context of a specific reclamation.
     *
     * @param Reclamation $reclamation  The reclamation being discussed
     * @param string      $userMessage  The latest user message
     * @param array       $history      Previous messages [{role, content}, …]
     * @param int         $userId       The authenticated user id
     *
     * @return array{success: bool, reply: string, escalated: bool}
     */
    public function chat(Reclamation $reclamation, string $userMessage, array $history, int $userId): array
    {
        // Load all reclamations by this user for extra context
        $userReclamations = $this->reclamationRepository->findByUser($userId);
        $reclamationContext = $this->buildReclamationContext($reclamation);
        $userHistory = $this->buildUserReclamationsContext($userReclamations, $reclamation->getId());

        // Check if the message or reclamation requires admin escalation
        $needsEscalation = $this->detectEscalation($userMessage, $reclamation);

        $systemInstruction = $this->buildSystemPrompt($reclamationContext, $userHistory, $needsEscalation);

        // Build OpenAI-compatible messages array
        $messages = [];
        $messages[] = ['role' => 'system', 'content' => $systemInstruction];

        // Add conversation history (last 12 messages max)
        $trimmedHistory = array_slice($history, -12);
        foreach ($trimmedHistory as $msg) {
            if (isset($msg['role'], $msg['content'])) {
                $messages[] = [
                    'role'    => $msg['role'] === 'assistant' ? 'assistant' : 'user',
                    'content' => $msg['content'],
                ];
            }
        }

        // Add current user message
        $messages[] = ['role' => 'user', 'content' => $userMessage];

        try {
            $response = $this->httpClient->request('POST', self::API_URL, [
                'headers' => [
                    'Content-Type'  => 'application/json',
                    'Authorization' => 'Bearer ' . $this->openRouterApiKey,
                ],
                'json' => [
                    'model'       => 'google/gemini-2.5-flash-lite',
                    'messages'    => $messages,
                    'temperature' => 0.6,
                    'max_tokens'  => 900,
                ],
            ]);

            $data  = $response->toArray();
            $reply = $data['choices'][0]['message']['content']
                ?? 'Désolé, je n\'ai pas pu traiter votre demande.';

            // Check if the AI itself signalled escalation
            $escalated = $needsEscalation || $this->replyContainsEscalation($reply);

            return [
                'success'   => true,
                'reply'     => trim($reply),
                'escalated' => $escalated,
            ];

        } catch (\Exception $e) {
            $errorMsg = $e->getMessage();

            if (str_contains($errorMsg, '429')) {
                $reply = '⚠️ Trop de requêtes. Veuillez patienter quelques secondes et réessayer.';
            } elseif (str_contains($errorMsg, '401') || str_contains($errorMsg, '403')) {
                $reply = '🔑 Erreur d\'authentification API. Contactez l\'administrateur.';
            } else {
                $reply = '❌ Erreur de connexion au service IA. Veuillez réessayer plus tard.';
            }

            return [
                'success'   => false,
                'reply'     => $reply,
                'escalated' => false,
            ];
        }
    }

    // ─── Private helpers ────────────────────────────────────────────

    private function buildSystemPrompt(string $reclamationCtx, string $userHistory, bool $forceEscalation): string
    {
        $escalationBlock = $forceEscalation
            ? "\n\n⚠️ IMPORTANT: Cette demande nécessite l'intervention d'un administrateur. " .
              "Informe poliment l'utilisateur que tu ne peux pas traiter cette demande toi-même " .
              "et qu'un administrateur va prendre en charge sa réclamation dans les plus brefs délais. " .
              "Il sera notifié par email."
            : '';

        return <<<PROMPT
Tu es **Tahwissa Support Agent** 🛟, l'assistant intelligent du service réclamations de l'agence de voyages Tahwissa (Tunisie).

## Ton rôle :
- Aider les clients avec leurs réclamations en leur fournissant des réponses utiles et personnalisées
- Analyser le contexte de la réclamation pour donner des conseils pertinents
- Rassurer le client et lui montrer que sa réclamation est prise en charge
- Guider le client sur les actions qu'il peut effectuer lui-même

## Réclamation en cours :
{$reclamationCtx}

## Autres réclamations de cet utilisateur :
{$userHistory}

## Connaissances de la plateforme Tahwissa :
- **Réservations de voyages** : les clients peuvent réserver, annuler (uniquement si statut EN_ATTENTE), payer en ligne via Stripe ou en espèces
- **Réservations d'événements** : paiement obligatoire via Stripe, billet PDF généré automatiquement, annulation possible si EN_ATTENTE
- **Réservations de transport** : réservation de bus/transport entre villes tunisiennes
- **QR Codes** : générés automatiquement pour chaque réservation confirmée
- **Factures PDF** : téléchargeables depuis la page de détail de la réservation
- **Paiements** : via Stripe (carte bancaire), confirmation automatique par email et SMS
- **Annulation** : gratuite dans les 30 premières minutes, uniquement si la réservation est EN_ATTENTE
- **Réclamations** : les clients peuvent soumettre des réclamations (types: Technique, Service Client, Information, Paiement, Autre)
- **Statuts des réclamations** : EN_ATTENTE → EN_COURS → TRAITEE ou REJETEE (seul un admin peut changer le statut)
- **Support** : le délai de traitement est de 48h maximum

## Règles strictes :
1. Réponds TOUJOURS en français
2. Sois empathique, professionnel et rassurant
3. Utilise des emojis pour rendre la conversation chaleureuse 😊
4. Sois concis : max 3-4 paragraphes par réponse
5. Si tu PEUX aider (informations, guides, explications) → aide directement
6. Si tu NE PEUX PAS aider (remboursements, modifications de compte, litiges, bugs serveur, actions admin) → dis clairement :
   "🔒 Cette demande nécessite l'intervention d'un administrateur. Un admin prendra en charge votre réclamation dans les plus brefs délais. Vous serez notifié par email."
7. Ne fais JAMAIS de promesses que tu ne peux pas tenir (dates exactes de résolution, montants de remboursement, etc.)
8. Si la réclamation est déjà TRAITÉE, félicite le client et demande si tout est résolu
9. Si la réclamation est REJETÉE, explique poliment que la décision a été prise et suggère de créer une nouvelle réclamation avec plus de détails si nécessaire
{$escalationBlock}
PROMPT;
    }

    private function buildReclamationContext(Reclamation $reclamation): string
    {
        $statutLabel = $reclamation->getStatutLabel();
        $date = $reclamation->getDateCreation()?->format('d/m/Y H:i') ?? 'N/A';
        $type = $reclamation->getType() ?? 'Non défini';
        $id = $reclamation->getId();
        $titre = $reclamation->getTitre();
        $desc = $reclamation->getDescription();

        return <<<CTX
- **ID** : #{$id}
- **Titre** : {$titre}
- **Type** : {$type}
- **Statut** : {$statutLabel}
- **Date de soumission** : {$date}
- **Description complète** : {$desc}
CTX;
    }

    private function buildUserReclamationsContext(array $reclamations, ?int $currentId): string
    {
        $others = array_filter($reclamations, fn(Reclamation $r) => $r->getId() !== $currentId);

        if (empty($others)) {
            return 'Aucune autre réclamation.';
        }

        $lines = [];
        foreach (array_slice($others, 0, 5) as $r) {
            /** @var Reclamation $r */
            $lines[] = sprintf(
                '- #%d | %s | Type: %s | Statut: %s | %s',
                $r->getId(),
                $r->getTitre(),
                $r->getType() ?? 'N/A',
                $r->getStatutLabel(),
                $r->getDateCreation()?->format('d/m/Y') ?? '?'
            );
        }

        return implode("\n", $lines);
    }

    private function detectEscalation(string $message, Reclamation $reclamation): bool
    {
        $lower = mb_strtolower($message . ' ' . $reclamation->getDescription(), 'UTF-8');
        foreach (self::ESCALATION_KEYWORDS as $keyword) {
            if (str_contains($lower, $keyword)) {
                return true;
            }
        }
        return false;
    }

    private function replyContainsEscalation(string $reply): bool
    {
        return str_contains($reply, '🔒') || str_contains(mb_strtolower($reply), 'administrateur');
    }
}
