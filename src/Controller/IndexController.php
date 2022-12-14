<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class IndexController extends AbstractController
{
    
    #[Route('/index', name: 'app_index')]
    public function show(Request $request, Environment $twig, ArticleRepository $articleRepository): Response
    {

        $offset = max(0, $request->query->getInt('offset', 0));
        $paginator = $articleRepository->getArticlePaginator($offset);

        return new Response($twig->render('products.html.twig', [
                        'articles' => $paginator,
            'previous' => $offset - articleRepository::PAGINATOR_PER_PAGE,
            'next' => min(count($paginator), $offset + articleRepository::PAGINATOR_PER_PAGE),
                    ]));                    
    }

    
}
