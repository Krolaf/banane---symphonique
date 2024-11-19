<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'commande_list', methods: ['GET'])]
    public function list(): Response
    {
        // Exemple de commandes simulées
        $commandes = [
            ['id' => 1, 'status' => 'En cours'],
            ['id' => 2, 'status' => 'Livrée'],
        ];

        return $this->render('commande/list.html.twig', [
            'commandes' => $commandes,
        ]);
    }

    #[Route('/commande/{id}', name: 'commande_detail', methods: ['GET'])]
    public function detail(int $id): Response
    {
        // Exemple de détail de commande
        $commande = ['id' => $id, 'status' => 'En cours', 'items' => ['Produit 1', 'Produit 2']];

        return $this->render('commande/detail.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/commande/new', name: 'commande_create', methods: ['POST'])]
    public function create(Request $request): Response
    {
        // Simuler la création d'une commande
        $data = $request->request->all();

        return $this->json([
            'message' => 'Commande créée avec succès',
            'data' => $data,
        ]);
    }
}
?>