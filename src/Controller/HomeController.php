<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /** @var ArticleRepository  */
    private $articleRepository;

    /**
     * HomeController constructor.
     * @param ArticleRepository $articleRepository
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $articles = $this->articleRepository->findLast(4);


//        $article1 = new Article();
//        $article1->setTitle('Title 1');
//        $article1->setSubtitle('SubTitle 1');
//        $article1->setCreatedAt(new \DateTime());
//        $article1->setAuthor('John Doe');
//        $article1->setBody('Lorem ipsum dolor sit amet');
//        $article1->setImage('img/post-bg.jpg');
//
//        $article2 = new Article();
//        $article2->setTitle('Title 2');
//        $article2->setSubtitle('SubTitle 2');
//        $article2->setCreatedAt(new \DateTime());
//        $article2->setAuthor('John Doe');
//        $article2->setBody('Lorem ipsum dolor sit amet');
//        $article2->setImage('img/post-bg.jpg');

        return $this->render('home/index.html.twig', [
            'articles' => $articles
        ]);
    }
}
