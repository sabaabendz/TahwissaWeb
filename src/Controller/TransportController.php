<?php

namespace App\Controller;

use App\Entity\Transport;
use App\Form\TransportType;
use App\Repository\TransportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\PdfService;
use App\Service\UnsplashService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/transport')]
class TransportController extends AbstractController
{
    private function checkRole(Request $request): void
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
    }

    #[Route('/', name: 'admin_transport_index', methods: ['GET'])]
    public function index(Request $request, TransportRepository $transportRepository, PaginatorInterface $paginator, UnsplashService $unsplashService): Response
    {
        $this->checkRole($request);
        
        $query = $transportRepository->createQueryBuilder('t')->getQuery();
        $transports = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
        
        // Get all transports for statistics (not paginated)
        $allTransports = $transportRepository->findAll();
        
        // Add images for each transport
        $transportImages = [];
        foreach ($transports->getItems() as $transport) {
            $transportImages[$transport->getIdTransport()] = $unsplashService->getTransportImageUrl(
                $transport->getVilleArrivee() ?? 'destination',
                $transport->getTypeTransport() ?? 'bus'
            );
        }
        
        return $this->render('admin/transport/index.html.twig', [
            'transports' => $transports,
            'allTransports' => $allTransports,
            'transportImages' => $transportImages,
        ]);
    }

    #[Route('/new', name: 'admin_transport_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkRole($request);
        
        $transport = new Transport();
        $form = $this->createForm(TransportType::class, $transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($transport);
            $em->flush();
            $this->addFlash('success', 'Transport ajouté avec succès !');
            return $this->redirectToRoute('admin_transport_index');
        }

        return $this->render('admin/transport/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_transport_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, Transport $transport, EntityManagerInterface $em): Response
    {
        $this->checkRole($request);
        
        $form = $this->createForm(TransportType::class, $transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Transport modifié avec succès !');
            return $this->redirectToRoute('admin_transport_index');
        }

        return $this->render('admin/transport/edit.html.twig', [
            'form' => $form->createView(),
            'transport' => $transport,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_transport_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, Transport $transport, EntityManagerInterface $em): Response
    {
        $this->checkRole($request);
        
        if ($this->isCsrfTokenValid('delete' . $transport->getIdTransport(), $request->request->get('_token'))) {
            $em->remove($transport);
            $em->flush();
            $this->addFlash('success', 'Transport supprimé avec succès !');
        }
        return $this->redirectToRoute('admin_transport_index');
    }

    #[Route('/{id}/pdf', name: 'admin_transport_pdf', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function pdf(Request $request, Transport $transport, PdfService $pdfService): Response
    {
        $this->checkRole($request);
        
        $pdfContent = $pdfService->generateTransportPdf($transport);
        
        return new Response($pdfContent, Response::HTTP_OK, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="transport_' . $transport->getIdTransport() . '.pdf"',
        ]);
    }
}
