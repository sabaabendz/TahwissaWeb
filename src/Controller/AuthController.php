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
                return new JsonResponse([
                    'success' => false,
                    'message' => '[DEBUG] Python inaccessible ('
                        . $pythonExe . '). stderr: '
                        . $checkProcess->getErrorOutput(),
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

            if ($output === '') {
                return new JsonResponse([
                    'success' => false,
                    'message' => '[DEBUG] Stdout vide. Python stderr: '
                        . $process->getErrorOutput(),
                ]);
            }

            // Sanitize encoding: convert whatever encoding we received to UTF-8.
            // This protects against any residual cp1252 bytes slipping through.
            $output = mb_convert_encoding($output, 'UTF-8', 'UTF-8');

            $result = json_decode($output, true);

            if (json_last_error() !== JSON_ERROR_NONE || !is_array($result)) {
                return new JsonResponse([
                    'success' => false,
                    'message' => '[DEBUG] JSON invalide (' . json_last_error_msg()
                        . '). stdout: ' . substr($output, 0, 200)
                        . ' | stderr: ' . $process->getErrorOutput(),
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
    public function forgotPassword(): Response
    {
        return $this->render('auth/forgot_password.html.twig');
    }
}
