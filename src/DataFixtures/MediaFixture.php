<?php

namespace App\DataFixtures;

use App\Entity\Media;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MediaFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $boucle = [
            1 => [
                'title' => 'Harry Potter 1',
                'image' => '.',
                'date' => '2001-12-05',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed mattis leo. Proin aliquam neque et ex mollis consectetur. In ac molestie tortor. Praesent at facilisis ex. Aenean vitae molestie diam. Sed nec tortor urna. Praesent quis eleifend augue.'
            ],
            2 => [
                'title' => 'Harry Potter 2',
                'image' => '.',
                'date' => '2002-11-20',
                'description' => 'Aliquam rhoncus magna eget dignissim pellentesque. Sed ullamcorper urna non interdum luctus. Morbi quis augue at mauris molestie pretium sed et metus. Morbi nec ipsum ac neque aliquet luctus vitae eget arcu.'
            ],
            3 => [
                'title' => 'Harry Potter 3',
                'image' => '.',
                'date' => '2004-06-02',
                'description' => 'Sed pharetra porta gravida. Nullam posuere massa a rhoncus tempor. Curabitur massa sem, accumsan a bibendum et, vestibulum quis orci. Aenean tempus lorem arcu, sit amet mattis nisl sodales et. Aliquam at bibendum nunc.'
            ],
            4 => [
                'title' => 'Harry Potter 4',
                'image' => '.',
                'date' => '2005-11-23',
                'description' => 'Fusce facilisis commodo erat eget pretium. Nulla urna ante, tincidunt sit amet massa vel, facilisis scelerisque dui. In vel erat at nunc convallis pulvinar. Vivamus pulvinar id urna et vehicula.'
            ],
            5 => [
                'title' => 'Harry Potter 5',
                'image' => '.',
                'date' => '2007-07-11',
                'description' => 'Nulla varius elit enim, id feugiat arcu cursus ac. Praesent ac hendrerit erat. Sed quis dolor non libero tempor dapibus ut eu sem. Nam maximus enim sed lacinia eleifend. Nam luctus pretium ex at vulputate.'
            ],
        ];
        foreach ($boucle as $value) {
            $media = new Media();
            $media->setTitle($value['title']);
            $media->setCoverImage($value['image']);
            $date = new \DateTime($value['date']);
            $media->setReleaseDate($date);
            $media->setShortDescription($value['description']);
            $media->setLongDescription($value['description']);
            $media->setStaff((array)null);
            $media->setCastMedia((array)null);
            $manager->persist($media);
        }

        $manager->flush();
    }
}
