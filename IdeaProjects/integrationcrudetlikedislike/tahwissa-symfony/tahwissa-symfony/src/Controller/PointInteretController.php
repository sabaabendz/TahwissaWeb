<?php
namespace App\Controller;

use App\Entity\PointInteret;
use App\Form\PointInteretType;
use App\Repository\PointInteretRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/point-interet')]
class PointInteretController extends AbstractController
{
    #[Route('/', name: 'admin_pointinteret_index', methods: ['GET'])]
    public function index(PointInteretRepository $repository, Request $request): Response
    {
        $typeFilter = $request->query->get('type');
        
        if ($typeFilter) {
            $pointsInteret = $repository->findBy(['type' => $typeFilter]);
        } else {
            $pointsInteret = $repository->findAll();
        }
        
        // Statistiques par type
        $allPoints = $repository->findAll();
        $stats = [];
        foreach ($allPoints as $point) {
            $type = $point->getType();
            if (!isset($stats[$type])) $stats[$type] = 0;
            $stats[$type]++;
        }
        
        return $this->render('admin/pointinteret/index.html.twig', [
            'pointsInteret' => $pointsInteret,
            'stats' => $stats,
            'currentType' => $typeFilter,
        ]);
    }

    #[Route('/new', name: 'admin_pointinteret_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $pointInteret = new PointInteret();
        $form = $this->createForm(PointInteretType::class, $pointInteret);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($pointInteret);
            $em->flush();
            $this->addFlash('success', 'Point d\'intérêt ajouté avec succès !');
            return $this->redirectToRoute('admin_pointinteret_index');
        }

        return $this->render('admin/pointinteret/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_pointinteret_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, PointInteret $pointInteret, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(PointInteretType::class, $pointInteret);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Point d\'intérêt modifié avec succès !');
            return $this->redirectToRoute('admin_pointinteret_index');
        }

        return $this->render('admin/pointinteret/edit.html.twig', [
            'form' => $form->createView(),
            'pointInteret' => $pointInteret,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_pointinteret_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, PointInteret $pointInteret, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $pointInteret->getIdPointInteret(), $request->request->get('_token'))) {
            $em->remove($pointInteret);
            $em->flush();
            $this->addFlash('success', 'Point d\'intérêt supprimé avec succès !');
        }
        return $this->redirectToRoute('admin_pointinteret_index');
    }
}