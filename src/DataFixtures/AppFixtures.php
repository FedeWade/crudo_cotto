<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        $user = new User();
        $user->setEmail("admin@admin.it");
        $user->setRoles(['ROLE_ADMIN']);
        $password = $this->encoder->hashPassword($user, 'admin');
        $user->setPassword($password);

        $manager->persist($user);


        $manager->flush();
    }
}

