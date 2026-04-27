<?php

namespace App\Service;

use App\Entity\User;

class CsvExportService
{
    /**
     * @param array<int, User> $users
     */
    public function generateUsersCsv(array $users): string
    {
        $handle = fopen('php://temp', 'wb+');
        if ($handle === false) {
            return '';
        }

        fwrite($handle, "\xEF\xBB\xBF");
        fputcsv($handle, ['Nom', 'Email', 'Role', 'Statut', 'Date inscription'], ';');

        foreach ($users as $user) {
            fputcsv($handle, [
                $user->getName(),
                $user->getEmail(),
                $user->getRole()?->getName() ?? 'UNASSIGNED',
                $user->isActive() ? 'Actif' : 'Inactif',
                $user->getCreatedAt()?->format('d/m/Y H:i:s') ?? '-',
            ], ';');
        }

        rewind($handle);
        $csv = stream_get_contents($handle) ?: '';
        fclose($handle);

        return $csv;
    }
}
