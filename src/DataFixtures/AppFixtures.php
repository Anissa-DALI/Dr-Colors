<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
<<<<<<< HEAD
=======
        // $product = new Product();
        // $manager->persist($product);

>>>>>>> c719235346e08f551d28e67de62c6abe54a7d068
        $manager->flush();
    }
}
