<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /** @var ArticleRepository  */
    private $articleRepository;

    /**
     * ArticleController constructor.
     * @param ArticleRepository $articleRepository
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

//    /**
//     * @param Request $request
//     * @return Response
//     * @Route("/article/{id}", name="showArticle")
//     */
//    public function show(Request $request): Response
//    {
//        $idArticle = $request->get('id');
//
//        $article = null;
//
//        if ($idArticle) {
//            $article = $this->articleRepository->find($idArticle);
//        }
//        return $this->render('article/show.html.twig', [
//            'article' => $article
//        ]);
//    }

    /**
     * @param Article $article
     * @return Response
     * @Route("/article/{id}", name="showArticle")
     */
    public function show(Article $article)
    {
        return $this->render('article/show.html.twig', [
            'article' => $article
        ]);
    }
}
