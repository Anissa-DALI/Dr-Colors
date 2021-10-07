<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Particulier;

class ParticulierFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    { $particulier = new Particulier();
        $particulier
        ->setCivilites("bbb")
        ->setNom("bbb")
        ->setPrenom("bbb")
        ->setTelephone("bbb")
        ->setEmail("bbb@bbb.com")
        ->setRealisation("bbb")
        ->setMessage("bbb");
        // $product = new Product();
        // $manager->persist($product);
        $manager->persist($particulier);

        $manager->flush();
    }
}
