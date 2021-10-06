<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Admin extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      $admin = new Admin();

      $admin
        ->setLogin("")
        ->setPassword("");



        $manager->flush();
    }
}
