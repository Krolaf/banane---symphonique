<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue', name: 'catalogue')]
    public function catalogue(): Response
    {
        // Tableau de vaisseaux Star Trek
        $produits = [
            new Produit('USS Enterprise', 2000.0, 'Vaisseau emblématique de la Fédération.', 'new', 10, ['exploration', 'emblématique']),
            new Produit('USS Voyager', 1500.0, 'Vaisseau d\'exploration perdu dans le Quadrant Delta.', 'featured', 0, ['exploration', 'long voyage']),
            new Produit('USS Defiant', 1800.0, 'Petit vaisseau de guerre puissant de Deep Space Nine.', 'featured', 5, ['guerre', 'stratégie']),
            new Produit('USS Discovery', 2200.0, 'Vaisseau expérimental avec un système de propulsion par spores.', 'new', 3, ['science', 'expérimental']),
            new Produit('USS Excelsior', 1900.0, 'Vaisseau de classe Excelsior, célèbre pour son rôle dans la défense de la Fédération.', null, 8, ['historique']),
            new Produit('USS Reliant', 1600.0, 'Vaisseau de classe Miranda impliqué dans la saga de Khan.', 'featured', 0, ['combat', 'tactique']),
            new Produit('USS Enterprise-D', 2500.0, 'Vaisseau amiral de Starfleet commandé par Jean-Luc Picard.', 'new', 15, ['exploration', 'amiral']),
            new Produit('USS Prometheus', 3000.0, 'Vaisseau avancé conçu pour le combat avec multi-vecteur.', 'featured', 2, ['technologie', 'guerre']),
            new Produit('USS Equinox', 1400.0, 'Petit vaisseau de la Fédération avec un destin tragique.', null, 0, ['science', 'tragédie']),
            new Produit('USS Saratoga', 1700.0, 'Vaisseau détruit lors de la bataille de Wolf 359.', null, 0, ['combat', 'histoire']),
        ];

        // Rendu de la vue avec les données
        return $this->render('catalogue/index.html.twig', [
            'produits' => $produits,
        ]);
    }
}
?>