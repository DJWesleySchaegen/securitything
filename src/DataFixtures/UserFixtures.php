<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {

        //Adds normal users
        for ($i = 0; $i < 10; $i++) {

            $user = new User();
            $user->setFirstName("user" . $i);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                "qwerty"
            ));
            $user->setEmail("user" . $i . "@email.com");
            $user->setRoles(["ROLE_USER"]);

            $manager->persist($user);
        }
        for ($i = 0; $i < 10; $i++) {

            $user = new User();
            $user->setFirstName("admin" . $i);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                "qwerty"
            ));
            $user->setEmail("admin" . $i . "@email.com");
            $user->setRoles(["ROLE_ADMIN"]);

            $manager->persist($user);
        }
        $manager->flush();
    }

}
