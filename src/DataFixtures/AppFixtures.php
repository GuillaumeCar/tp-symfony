<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Faker\Factory as FakerFactory;
use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 10; $i++) {
            $article = new Article();
            $article->setTitle($faker->text(20));
            $article->setSubtitle($faker->text(40));
            $article->setCreatedAt($faker->dateTime);
            $article->setAuthor($faker->firstName . ' ' . $faker->lastName);
            $article->setBody($faker->text(220));
            $article->setImage('img/post-bg.jpg');
            for ($j = 0; $j < 5; $j++) {
                $comment = new Comment();
                $comment->setName($faker->name);
                $comment->setEmail($faker->email);
                $comment->setCreatedAt($faker->dateTime);
                $comment->setText($faker->text);
                $comment->setArticle($article);

                $manager->persist($comment);
            }

            $manager->persist($article);
        }

        $manager->flush();
    }
}
