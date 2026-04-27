<?php

namespace App\Service;

use App\Entity\User;
use DateTimeInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

class PdfExportService
{
    /**
     * @param array<int, User> $users
     */
    public function generateUsersPdf(array $users, DateTimeInterface $generatedAt): string
    {
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->loadHtml($this->buildUsersHtml($users, $generatedAt));
        $dompdf->render();

        return $dompdf->output();
    }

    /**
     * @param array<int, User> $users
     */
    private function buildUsersHtml(array $users, DateTimeInterface $generatedAt): string
    {
        $rows = '';

        foreach ($users as $user) {
            $rows .= sprintf(
                '<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>',
                $this->escape($user->getName()),
                $this->escape((string) $user->getEmail()),
                $this->escape((string) ($user->getRole()?->getName() ?? 'UNASSIGNED')),
                $user->isActive() ? 'Actif' : 'Inactif'
            );
        }

        return sprintf(
            '<!doctype html><html lang="fr"><head><meta charset="utf-8"><style>
                body{font-family:DejaVu Sans,sans-serif;font-size:12px;color:#1f2937;}
                h1{font-size:18px;margin:0 0 6px 0;color:#0f766e;}
                .date{margin-bottom:14px;color:#475569;}
                table{width:100%%;border-collapse:collapse;}
                th,td{border:1px solid #cbd5e1;padding:8px;text-align:left;}
                th{background:#f1f5f9;}
            </style></head><body>
            <h1>Tahwissa - Liste des utilisateurs</h1>
            <div class="date">Date de generation: %s</div>
            <table>
                <thead><tr><th>Nom</th><th>Email</th><th>Role</th><th>Statut</th></tr></thead>
                <tbody>%s</tbody>
            </table>
            </body></html>',
            $generatedAt->format('d/m/Y H:i:s'),
            $rows
        );
    }

    private function escape(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}
