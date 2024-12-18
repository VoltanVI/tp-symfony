<?php

namespace App\DataFixtures;

use App\Entity\Languages;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $boucle = [
            1 => [
                'username' => 'app',
                'email' => 'app@app.com',
                'password' => 'Symfony24'
            ],
            2 => [
                'username' => 'hugo',
                'email' => 'hugo@app.com',
                'password' => 'Test123!'
            ],

        ];
        foreach ($boucle as $value) {
            $user = new User();
            $user->setUsername($value['username']);
            $user->setEmail($value['email']);
            $user->setPassword($value['password']);
            $manager->persist($user);
        }

        $manager->flush();
    }
}
