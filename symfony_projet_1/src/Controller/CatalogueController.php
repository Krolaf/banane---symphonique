<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue', name: 'catalogue_list', methods: ['GET'])]
    public function list(): Response
    {
        // Exemple de produits dans le catalogue
        $produits = [
            ['id' => 1, 'name' => 'Produit A', 'price' => 10],
            ['id' => 2, 'name' => 'Produit B', 'price' => 20],
        ];

        return $this->render('catalogue/list.html.twig', [
            'produits' => $produits,
        ]);
    }
}
?>