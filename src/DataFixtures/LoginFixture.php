<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use app\Entity\Login;
<<<<<<< HEAD
use App\DataFixtures\AppFixtures;
use App\DataFixtures\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\Hasher\MigratingPasswordHasher;

class LoginFixture extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
      $this->encoder = $encoder;
    }
=======
use app\src\DataFixtures\AppFixtures;

class LoginFixture extends Fixture
{

>>>>>>> 8725867a (modifs hash)

    public function load(ObjectManager $manager): void
    {
        $login = new Login();
          $login->setLogin("admin@test.com");
<<<<<<< HEAD
          $login->setPassword($this->encoder->encodePassword($login));
=======
          $login->setPassword($this->encoder->encodePassword($login, '123456'));
>>>>>>> 8725867a (modifs hash)


        // $product = new Product();
        // $manager->persist($product);
        $manager->persist($login);
        $manager->flush();
    }
}
