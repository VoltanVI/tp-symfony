<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $c = [
            1 => [
                'name' => 'Action',
                'label' => 'Action'
            ],
            2 => [
                'name' => 'Aventure',
                'label' => 'Aventure'
            ],
            3 => [
                'name' => 'Comédie',
                'label' => 'Comédie'
            ],
            4 => [
                'name' => 'Science Fiction',
                'label' => 'Science Fiction'
            ]
        ];

        foreach ($c as $category => $value) {
            $cat = new Categories();
            $cat->setName($value['name']);
            $cat->setLabel($value['label']);
            $manager->persist($cat);
        }

        $manager->flush();
    }
}
