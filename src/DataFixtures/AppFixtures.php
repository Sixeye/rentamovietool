<?php

namespace App\DataFixtures;

use App\Entity\Ad;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1 ; $i <= 30; $i++){
        $ad = new Ad();
        $ad->setTitle("Item title n°$i")
            ->setSlug("item-title-$i")
            ->setCoverImage("http://placehold.it/600x400")
            ->setIntroduction("Welcome filmmakers !")
            ->setContent("<p>Here's a new deal !</p>")
            ->setPrice(mt_rand(50, 999))
            ->setItems(mt_rand(1,9));

        $manager->persist($ad);
        }
        $manager->flush();
    }
}
