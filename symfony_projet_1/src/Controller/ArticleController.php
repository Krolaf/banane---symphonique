<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    

    #[Route('/blog', name: 'blog_list', methods: ['GET'])]
    public function list(): Response
    {
        $articles = [
            ['id' => 1, 'title' => 'Article 1', 'category' => 'Tech'],
            ['id' => 2, 'title' => 'Article 2', 'category' => 'Lifestyle'],
        ];

        return $this->render('article/index.html.twig', [
            'pageType' => 'list',
            'data' => $articles,
        ]);
    }

    #[Route('/blog/{slug}', name: 'blog_detail', methods: ['GET'])]
    public function detail(string $slug): Response
    {
        $article = [
            'title' => 'Article ' . ucfirst($slug),
            'content' => 'Contenu de l\'article.',
        ];

        return $this->render('article/index.html.twig', [
            'pageType' => 'detail',
            'data' => $article,
        ]);
    }

    #[Route('/blog/new', name: 'blog_create', methods: ['POST'])]
    public function create(Request $request): Response
    {
        $data = $request->request->all();

        return $this->render('article/index.html.twig', [
            'pageType' => 'create',
            'data' => $data,
        ]);
    }

    #[Route('/blog/category/{category}', name: 'blog_filter_by_category', methods: ['GET'])]
    public function filterByCategory(string $category): Response
    {
        $articles = [
            ['id' => 1, 'title' => 'Article dans ' . $category],
            ['id' => 2, 'title' => 'Autre article dans ' . $category],
        ];

        return $this->render('article/index.html.twig', [
            'pageType' => 'category',
            'data' => $articles,
            'category' => ucfirst($category),
        ]);
    }
}

?>