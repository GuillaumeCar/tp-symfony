<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as FakerFactory;

class CommentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
//        $faker = FakerFactory::create();
//
//        for ($i = 0; $i < 10; $i++) {
//            $comment = new Comment();
//            $comment->setName($faker->name);
//            $comment->setEmail($faker->email);
//            $comment->setCreatedAt($faker->dateTime);
//            $comment->setText($faker->text);
//
//            $manager->persist($comment);
//            $this->addReference('comment' . $i, $comment);
//        }
//
//        $manager->flush();
    }
}
