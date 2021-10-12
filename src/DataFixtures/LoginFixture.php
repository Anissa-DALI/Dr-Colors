<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\MigratingPasswordHasher;
use App\Entity\Login;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class LoginFixture extends Fixture
{

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
      $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $login = new Login();
          $login->setLogin("admin@test.com");
          $login->setPassword($this->encoder->encodePassword($login, "123456"));


        // $product = new Product();
        // $manager->persist($product);
        $manager->persist($login);
        $manager->flush();
    }
}
