<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixtures extends BaseFixtures
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i<=10;$i++){
            $article = new Article();
            $article->setTitle($this->faker->title);
            $article->setContent($this->faker->text);
            $article->setSlug($this->faker->slug);
            $manager->persist($article);
        }

        $manager->flush();
    }
}
