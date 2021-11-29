<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Article extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $article = new \App\Entity\Article();
        $article->setNom('range');
        $article->setSlug('zero');

        $manager->persist($article);

        $manager->flush();
    }
}
