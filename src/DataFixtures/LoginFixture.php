<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use app\Entity\Login;
use App\DataFixtures\AppFixtures;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class LoginFixture extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
      $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $login = new Login();
          $login->setLogin("admin@test.com");
          $login->setPassword($this->encoder->encodePassword($login));


        // $product = new Product();
        // $manager->persist($product);
        $manager->persist($login);
        $manager->flush();
    }
}
