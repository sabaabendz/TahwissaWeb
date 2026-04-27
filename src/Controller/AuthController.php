<?php

namespace App\Controller;

use App\Form\LoginFormType;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // If already authenticated, redirect to home
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        $loginForm = $this->createForm(LoginFormType::class, [
            'email' => $lastUsername,
        ]);

        return $this->render('auth/login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
            'loginForm'     => $loginForm->createView(),
        ]);
    }

    /**
     * AJAX endpoint: runs human_verification.py and stores result in session.
     * Called by the "Verify I'm Human" button on the login page.
     */
    #[Route('/verify-human', name: 'app_verify_human', methods: ['POST'])]
    public function verifyHuman(Request $request): JsonResponse
    {
        try {
            // ── 1. Resolve Python executable ───────────────────────────────
            $pythonExe = $_ENV['PYTHON_EXECUTABLE']
                ?? getenv('PYTHON_EXECUTABLE')
                ?: 'python';

            // ── 2. Resolve script path ─────────────────────────────────────
            $projectDir = $this->getParameter('kernel.project_dir');
            $scriptPath = $projectDir . DIRECTORY_SEPARATOR . 'human_verification.py';

            if (!file_exists($scriptPath)) {
                return new JsonResponse([
                    'success' => false,
                    'message' => '[DEBUG] Script introuvable. Chemin: ' . $scriptPath,
                ]);
            }

            // ── 3. Quick Python sanity-check ───────────────────────────────
            $checkProcess = new Process([$pythonExe, '--version']);
            $checkProcess->setTimeout(5);
            $checkProcess->run();

            if (!$checkProcess->isSuccessful()) {
                $checkStderr = trim($checkProcess->getErrorOutput());
                if (!mb_check_encoding($checkStderr, 'UTF-8')) {
                    $checkStderr = mb_convert_encoding($checkStderr, 'UTF-8', 'Windows-1252');
                }
                return new JsonResponse([
                    'success' => false,
                    'message' => '[DEBUG] Python inaccessible ('
                        . $pythonExe . '). stderr: '
                        . $checkStderr,
                ]);
            }

            // ── 4. Run: python human_verification.py webcam 10 ────────────
            $process = new Process([$pythonExe, $scriptPath, 'webcam', '10']);
            $process->setTimeout(30);

            // Force Python stdout to UTF-8 regardless of Windows code page.
            // This is a belt-and-suspenders fix alongside the io.TextIOWrapper
            // at the top of the Python script.
            $process->setEnv([
                'PYTHONIOENCODING' => 'utf-8',
                'PYTHONUTF8'       => '1',       // Python 3.7+ UTF-8 mode
            ]);

            $process->run();

            // ── 5. Parse stdout JSON ───────────────────────────────────────
            $output = trim($process->getOutput());
            $stderr = trim($process->getErrorOutput());

            if (!mb_check_encoding($output, 'UTF-8')) {
                $output = mb_convert_encoding($output, 'UTF-8', 'Windows-1252');
            }
            if (!mb_check_encoding($stderr, 'UTF-8')) {
                $stderr = mb_convert_encoding($stderr, 'UTF-8', 'Windows-1252');
            }

            if ($output === '') {
                return new JsonResponse([
                    'success' => false,
                    'message' => '[DEBUG] Stdout vide. Python stderr: ' . $stderr,
                ]);
            }

            $result = json_decode($output, true);

            if (json_last_error() !== JSON_ERROR_NONE || !is_array($result)) {
                return new JsonResponse([
                    'success' => false,
                    'message' => '[DEBUG] JSON invalide (' . json_last_error_msg()
                        . '). stdout: ' . mb_substr($output, 0, 200)
                        . ' | stderr: ' . $stderr,
                ]);
            }


            // ── 6. Store flag on success ───────────────────────────────────
            if (!empty($result['success'])) {
                $request->getSession()->set('human_verified', true);
            }

            return new JsonResponse($result);

        } catch (\Throwable $e) {
            // Catch absolutely everything — show in UI instead of 500 page
            return new JsonResponse([
                'success' => false,
                'message' => '[DEBUG] Exception PHP: ' . get_class($e)
                    . ' — ' . $e->getMessage()
                    . ' (ligne ' . $e->getLine() . ')',
            ]);
        }
    }


    #[Route('/connect/google', name: 'connect_google_start')]
    public function connectGoogle(ClientRegistry $clientRegistry): Response
    {
        return $clientRegistry
            ->getClient('google_client')
            ->redirect(['email', 'profile'], []);
    }

    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectGoogleCheck(): never
    {
        throw new \LogicException('This code should never be reached.');
    }

    #[Route('/connect/github', name: 'connect_github_start')]
    public function connectGithub(ClientRegistry $clientRegistry): Response
    {
        return $clientRegistry
            ->getClient('github_client')
            ->redirect(['user:email'], []);
    }

    #[Route('/connect/github/check', name: 'connect_github_check')]
    public function connectGithubCheck(): never
    {
        throw new \LogicException('This code should never be reached.');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // This method will be intercepted by the security firewall
        throw new \LogicException('This method should not be reached.');
    }

    #[Route('/forgot-password', name: 'app_forgot_password')]
    public function forgotPassword(
        Request $request,
        \Doctrine\ORM\EntityManagerInterface $em,
        \Symfony\Component\Mailer\MailerInterface $mailer
    ): Response {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $user = $em->getRepository(\App\Entity\User::class)->findOneBy(['email' => $email]);

            if ($user) {
                // Generate token
                $token = bin2hex(random_bytes(32));
                $user->setResetToken($token);
                // Valid for 1 hour
                $user->setResetTokenExpiresAt(new \DateTime('+1 hour'));
                $em->flush();

                // Send email
                $resetUrl = $this->generateUrl('app_reset_password', ['token' => $token], \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL);
                
                $emailMessage = (new \Symfony\Component\Mime\Email())
                    ->from($this->getParameter('env(MAILER_FROM)') ?? 'noreply@tahwissa.com')
                    ->to($user->getEmail())
                    ->subject('Réinitialisation de votre mot de passe')
                    ->html(sprintf(
                        '<p>Bonjour,</p><p>Pour réinitialiser votre mot de passe, veuillez cliquer sur le lien suivant : <a href="%s">%s</a></p><p>Ce lien expirera dans 1 heure.</p>',
                        $resetUrl,
                        $resetUrl
                    ));

                try {
                    $mailer->send($emailMessage);
                } catch (\Throwable $e) {
                    $this->addFlash('danger', 'Erreur lors de l\'envoi de l\'email.');
                    return $this->redirectToRoute('app_forgot_password');
                }
            }

            $this->addFlash('success', 'Si votre adresse email est valide, un lien de réinitialisation vous a été envoyé.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('auth/forgot_password.html.twig');
    }

    #[Route('/reset-password/{token}', name: 'app_reset_password')]
    public function resetPassword(
        string $token,
        Request $request,
        \Doctrine\ORM\EntityManagerInterface $em,
        \Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface $passwordHasher
    ): Response {
        $user = $em->getRepository(\App\Entity\User::class)->findOneBy(['resetToken' => $token]);

        if (!$user || $user->getResetTokenExpiresAt() < new \DateTime()) {
            $this->addFlash('danger', 'Ce lien de réinitialisation est invalide ou expiré.');
            return $this->redirectToRoute('app_forgot_password');
        }

        if ($request->isMethod('POST')) {
            $password = $request->request->get('password');
            $passwordConfirm = $request->request->get('password_confirm');

            if (empty($password) || $password !== $passwordConfirm) {
                $this->addFlash('danger', 'Les mots de passe ne correspondent pas.');
            } else {
                $hashedPassword = $passwordHasher->hashPassword($user, $password);
                $user->setPassword($hashedPassword);
                
                // Clear the token
                $user->setResetToken(null);
                $user->setResetTokenExpiresAt(null);
                
                $em->flush();

                $this->addFlash('success', 'Votre mot de passe a été modifié avec succès. Vous pouvez maintenant vous connecter.');
                return $this->redirectToRoute('app_login');
            }
        }

        return $this->render('auth/reset_password.html.twig');
    }
}
