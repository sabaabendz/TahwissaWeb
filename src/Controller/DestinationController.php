<?php

namespace App\Controller;

use App\Entity\Destination;
use App\Form\DestinationType;
use App\Repository\DestinationRepository;
use App\Service\DestinationEmailService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/destination')]
class DestinationController extends AbstractController
{
    private DestinationEmailService $destinationEmailService;

    public function __construct(DestinationEmailService $destinationEmailService)
    {
        $this->destinationEmailService = $destinationEmailService;
    }

    #[Route('/', name: 'admin_destination_index', methods: ['GET'])]
    public function index(DestinationRepository $repository, Request $request): Response
    {
        $page = $request->query->getInt('page', 1);
        $limit = 10;
        $offset = ($page - 1) * $limit;
        
        // Requête avec jointure pour éviter N+1 ET pagination
        $query = $repository->createQueryBuilder('d')
            ->leftJoin('d.pointsInteret', 'p')
            ->addSelect('p')
            ->orderBy('d.nom', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery();
        
        // Utilisation du Paginator Doctrine officiel
        $doctrinePaginator = new Paginator($query, true);
        
        $destinations = [];
        foreach ($doctrinePaginator as $destination) {
            $destinations[] = $destination;
        }
        
        $total = count($doctrinePaginator);
        $totalPages = ceil($total / $limit);
        
        return $this->render('admin/destination/index.html.twig', [
            'destinations' => $destinations,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'total' => $total,
        ]);
    }

    #[Route('/new', name: 'admin_destination_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $destination = new Destination();
        $form = $this->createForm(DestinationType::class, $destination);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->destinationEmailService->notifyDestinationCreated(
                'ahmedbelkhiria07@gmail.com',
                [
                    'nom' => $destination->getNom(),
                    'pays' => $destination->getPays(),
                    'ville' => $destination->getVille(),
                    'description' => $destination->getDescription(),
                ]
            );
            
            $em->persist($destination);
            $em->flush();
            
            $this->addFlash('success', 'Destination ajoutée avec succès !');
            return $this->redirectToRoute('admin_destination_index');
        }

        return $this->render('admin/destination/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_destination_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Destination $destination, EntityManagerInterface $em): Response
    {
        $oldData = [
            'nom' => $destination->getNom(),
            'pays' => $destination->getPays(),
            'ville' => $destination->getVille(),
        ];

        $form = $this->createForm(DestinationType::class, $destination);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newData = [
                'nom' => $destination->getNom(),
                'pays' => $destination->getPays(),
                'ville' => $destination->getVille(),
            ];

            $changes = [];
            foreach ($newData as $key => $value) {
                if ($oldData[$key] != $value) {
                    $changes[$key] = ['ancien' => $oldData[$key], 'nouveau' => $value];
                }
            }

            $em->flush();

            if (!empty($changes)) {
                $this->destinationEmailService->notifyDestinationUpdated(
                    'ahmedbelkhiria07@gmail.com',
                    $destination->getNom(),
                    $changes
                );
            }

            $this->addFlash('success', 'Destination modifiée avec succès !');
            return $this->redirectToRoute('admin_destination_index');
        }

        return $this->render('admin/destination/edit.html.twig', [
            'form' => $form->createView(),
            'destination' => $destination,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_destination_delete', methods: ['POST'])]
    public function delete(Request $request, Destination $destination, EntityManagerInterface $em): Response
    {
        $destinationData = [
            'nom' => $destination->getNom(),
            'pays' => $destination->getPays(),
            'ville' => $destination->getVille(),
        ];

        if ($this->isCsrfTokenValid('delete' . $destination->getIdDestination(), $request->request->get('_token'))) {
            $em->remove($destination);
            $em->flush();

            $this->destinationEmailService->notifyDestinationDeleted(
                'ahmedbelkhiria07@gmail.com',
                $destinationData['nom'],
                $destinationData
            );

            $this->addFlash('success', 'Destination supprimée avec succès !');
        }
        return $this->redirectToRoute('admin_destination_index');
    }
}