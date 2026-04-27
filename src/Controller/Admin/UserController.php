<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\AdminUserType;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use App\Service\CsvExportService;
use App\Service\PdfExportService;
use App\Service\QRCodeService;
use App\Service\StatisticsService;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/admin')]
class UserController extends AbstractController
{
    #[Route('/users', name: 'admin_users_index', methods: ['GET'])]
    public function index(
        Request $request,
        UserRepository $userRepository,
        RoleRepository $roleRepository,
        StatisticsService $statisticsService
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $search = trim((string) $request->query->get('search', ''));
        $roleFilter = trim((string) $request->query->get('role', ''));

        $qb = $userRepository->createQueryBuilder('u')
            ->leftJoin('u.role', 'r')
            ->addSelect('r')
            ->orderBy('u.createdAt', 'DESC');

        if ($search !== '') {
            $qb->andWhere('u.email LIKE :search OR u.firstName LIKE :search OR u.lastName LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        if ($roleFilter !== '') {
            $qb->andWhere('r.name = :role')
                ->setParameter('role', $roleFilter);
        }

        return $this->render('admin/user/index.html.twig', [
            'users' => $qb->getQuery()->getResult(),
            'roles' => $roleRepository->findAll(),
            'search' => $search,
            'currentRole' => $roleFilter,
            'stats' => $statisticsService->getUserDashboardStatistics(),
            'latestUsers' => $statisticsService->getLatestRegisteredUsers(5),
        ]);
    }

    #[Route('/users/new', name: 'admin_users_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $hasher): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $user = new User();
        $user->setIsActive(true);
        $user->setIsVerified(true);

        $form = $this->createForm(AdminUserType::class, $user, ['is_new' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword($hasher->hashPassword($user, $plainPassword));

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Utilisateur créé avec succès !');

            return $this->redirectToRoute('admin_users_index');
        }

        return $this->render('admin/user/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/user/export-pdf', name: 'admin_user_export_pdf', methods: ['GET'])]
    public function exportPdf(Request $request, UserRepository $userRepository, PdfExportService $pdfExportService): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $users = $this->getFilteredUsers($request, $userRepository);
        $pdfContent = $pdfExportService->generateUsersPdf($users, new DateTimeImmutable());

        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set(
            'Content-Disposition',
            HeaderUtils::makeDisposition(HeaderUtils::DISPOSITION_ATTACHMENT, 'users-export-' . date('Ymd-His') . '.pdf')
        );

        return $response;
    }

    #[Route('/user/export-csv', name: 'admin_user_export_csv', methods: ['GET'])]
    public function exportCsv(Request $request, UserRepository $userRepository, CsvExportService $csvExportService): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $users = $this->getFilteredUsers($request, $userRepository);
        $csvContent = $csvExportService->generateUsersCsv($users);

        $response = new Response($csvContent);
        $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
        $response->headers->set(
            'Content-Disposition',
            HeaderUtils::makeDisposition(HeaderUtils::DISPOSITION_ATTACHMENT, 'users-export-' . date('Ymd-His') . '.csv')
        );

        return $response;
    }

    #[Route('/user/{id}/qr-code', name: 'admin_user_qr_code', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function generateQRCode(User $user, Request $request, QRCodeService $qrCodeService): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $profilePath = $this->generateUrl('admin_users_show', ['id' => $user->getId()], UrlGeneratorInterface::ABSOLUTE_PATH);
        $qrPayload = $qrCodeService->generateUserProfileQr($user, $profilePath);

        $response = new Response($qrPayload['content']);
        $response->headers->set('Content-Type', $qrPayload['mimeType']);

        if ($request->query->getBoolean('download')) {
            $response->headers->set(
                'Content-Disposition',
                HeaderUtils::makeDisposition(
                    HeaderUtils::DISPOSITION_ATTACHMENT,
                    'user-' . $user->getId() . '-qr.' . $qrPayload['fileExtension']
                )
            );
        }

        return $response;
    }

    #[Route('/users/{id}', name: 'admin_users_show', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function show(User $user): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/user/show.html.twig', [
            'userEntity' => $user,
        ]);
    }

    #[Route('/users/{id}/edit', name: 'admin_users_edit', requirements: ['id' => '\\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $form = $this->createForm(AdminUserType::class, $user, ['is_new' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Utilisateur modifié avec succès !');

            return $this->redirectToRoute('admin_users_index');
        }

        return $this->render('admin/user/edit.html.twig', [
            'form' => $form->createView(),
            'userEntity' => $user,
        ]);
    }

    #[Route('/users/{id}/toggle-active', name: 'admin_users_toggle_active', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function toggleActive(User $user, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $user->setIsActive(!$user->isActive());
        $em->flush();

        $this->addFlash('success', $user->isActive() ? 'Utilisateur activé.' : 'Utilisateur désactivé.');

        return $this->redirectToRoute('admin_users_index');
    }

    #[Route('/users/{id}/delete', name: 'admin_users_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete' . $user->getId(), (string) $request->request->get('_token'))) {
            $em->remove($user);
            $em->flush();
            $this->addFlash('success', 'Utilisateur supprimé avec succès !');
        }

        return $this->redirectToRoute('admin_users_index');
    }

    #[Route('/users/{id}/remove-avatar', name: 'admin_users_remove_avatar', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function removeAvatar(Request $request, User $user, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('remove_avatar' . $user->getId(), (string) $request->request->get('_token'))) {
            $user->setAvatarUrl(null);
            $em->flush();
            $this->addFlash('success', 'Avatar supprimé avec succès.');
        }

        return $this->redirectToRoute('admin_users_show', ['id' => $user->getId()]);
    }

    #[Route('/users/{id}/profile', name: 'admin_users_profile', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function profile(User $user): Response
    {
        return $this->show($user);
    }

    /**
     * @return array<int, User>
     */
    private function getFilteredUsers(Request $request, UserRepository $userRepository): array
    {
        $search = trim((string) $request->query->get('search', ''));
        $roleFilter = trim((string) $request->query->get('role', ''));

        $qb = $userRepository->createQueryBuilder('u')
            ->leftJoin('u.role', 'r')
            ->addSelect('r')
            ->orderBy('u.createdAt', 'DESC');

        if ($search !== '') {
            $qb->andWhere('u.email LIKE :search OR u.firstName LIKE :search OR u.lastName LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        if ($roleFilter !== '') {
            $qb->andWhere('r.name = :role')
                ->setParameter('role', $roleFilter);
        }

        return $qb->getQuery()->getResult();
    }
}
