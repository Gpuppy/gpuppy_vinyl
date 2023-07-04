<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ArtistFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        $c = [
            1 => [
                'name' => 'Jimmy Hendrix',
                'slug' => 'jimmy hendrix'
            ],
            2 => [
                'name' => 'Elvis Presley',
                'slug' => 'elvis presley'
            ],
            3 => [
                'name' => 'Dire Strait',
                'slug' => 'dire strait'
            ],
            4 => [
                'name' => 'AC/DC',
                'slug' => 'ac/dc'
            ],
            5 => [
                'name' => 'Michael Jackson',
                'slug' => 'michael jackson'
            ],
            6 => [
                'name' => 'DrDre',
                'slug' => 'drdre'
            ],
            7 => [
                'name' => 'Sia',
                'slug' => 'sia'
            ]
        ];

        foreach ($c as $k => $value) {
            $artist = new Artist();
            $artist->setName($value['name']);
            $artist->setSlug($value['slug']);
            $manager->persist($artist);
            $this->addReference('artist-' . $k, $artist);
        }

        $manager->flush();
    }
    public function getDependencies():array
    {
        return [
            VinylFixtures::class,
        ];
    }
}