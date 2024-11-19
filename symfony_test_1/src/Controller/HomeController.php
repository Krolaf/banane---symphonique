<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        // Tableau de vaisseaux Star Trek
        $produits = [
            new Produit('USS Enterprise', 2000.0, 'Vaisseau emblématique de la Fédération.'),
            new Produit('USS Voyager', 1500.0, 'Vaisseau d\'exploration perdu dans le Quadrant Delta.'),
            new Produit('USS Defiant', 1800.0, 'Petit vaisseau de guerre puissant de Deep Space Nine.'),
            new Produit('USS Discovery', 2200.0, 'Vaisseau expérimental avec un système de propulsion par spores.'),
            new Produit('USS Excelsior', 1900.0, 'Vaisseau de classe Excelsior, célèbre pour son rôle dans la défense de la Fédération.'),
            new Produit('USS Reliant', 1600.0, 'Vaisseau de classe Miranda impliqué dans la saga de Khan.'),
            new Produit('USS Enterprise-D', 2500.0, 'Vaisseau amiral de Starfleet commandé par Jean-Luc Picard.'),
            new Produit('USS Prometheus', 3000.0, 'Vaisseau avancé conçu pour le combat avec multi-vecteur.'),
            new Produit('USS Equinox', 1400.0, 'Petit vaisseau de la Fédération avec un destin tragique.'),
            new Produit('USS Saratoga', 1700.0, 'Vaisseau détruit lors de la bataille de Wolf 359.'),
        ];

        // Rendu de la vue avec les données
        return $this->render('home/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'title' => 'À propos',
        ]);
    }
}
?>