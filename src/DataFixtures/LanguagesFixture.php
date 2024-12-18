<?php

namespace App\DataFixtures;

use App\Entity\Languages;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LanguagesFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $boucle = [
            1 => [
                'name' => 'Français',
                'code' => 'FR'
            ],
            2 => [
                'name' => 'Anglais',
                'code' => 'EN'
            ],
            3 => [
                'name' => 'Italien',
                'code' => 'IT'
            ],
            4 => [
                'name' => 'Allemand',
                'code' => 'DE'
            ],
            5 => [
                'name' => 'Espagnol',
                'code' => 'ES'
            ],
        ];
        foreach ($boucle as $value) {
            $langue = new Languages();
            $langue->setName($value['name']);
            $langue->setCode($value['code']);
            $manager->persist($langue);
        }

        $manager->flush();
    }
}
