<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class AvatarUploaderHelper
{
    public function __construct(
        private readonly string $avatarDirectory,
        private readonly string $avatarWebPath,
    ) {
    }

    public function upload(UploadedFile $avatarFile, int $userId): string
    {
        if (!is_dir($this->avatarDirectory)) {
            mkdir($concurrentDirectory = $this->avatarDirectory, 0755, true);
            if (!is_dir($concurrentDirectory)) {
                throw new \RuntimeException('Le dossier des avatars ne peut pas etre cree.');
            }
        }

        $extension = $avatarFile->guessExtension();
        if ($extension === null) {
            $extension = 'jpg';
        }

        $safeExtension = strtolower($extension);
        if (!in_array($safeExtension, ['jpg', 'jpeg', 'png', 'gif'], true)) {
            throw new \RuntimeException('Extension de fichier image non autorisee.');
        }

        $fileName = sprintf('user_%d_avatar_%s.%s', $userId, bin2hex(random_bytes(6)), $safeExtension);
        $avatarFile->move($this->avatarDirectory, $fileName);

        return rtrim($this->avatarWebPath, '/') . '/' . $fileName;
    }
}
