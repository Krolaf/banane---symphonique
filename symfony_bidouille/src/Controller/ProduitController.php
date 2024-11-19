<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/produit/{id}', name: 'produit_detail', methods: ['GET'])]
    public function detail(int $id): Response
    {
        // Exemple de produit détaillé
        $produit = ['id' => $id, 'name' => 'Produit ' . $id, 'price' => 50];

        return $this->render('produit/detail.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/produit/new', name: 'produit_create', methods: ['POST'])]
    public function create(Request $request): Response
    {
        // Simuler la création d'un produit
        $data = $request->request->all();

        return $this->json([
            'message' => 'Produit créé avec succès',
            'data' => $data,
        ]);
    }

    #[Route('/produit/edit/{id}', name: 'produit_edit', methods: ['POST'])]
    public function edit(Request $request, int $id): Response
    {
        // Simuler la modification d'un produit
        $data = $request->request->all();

        return $this->json([
            'message' => 'Produit modifié avec succès',
            'produit_id' => $id,
            'data' => $data,
        ]);
    }
}
?>