<?php

namespace App\DataFixtures;

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
            $manager->persist($article);
        }

        $manager->flush();
    }
}
