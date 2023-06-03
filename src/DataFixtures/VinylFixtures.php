<?php

namespace App\DataFixtures;

use App\Entity\Vinyl;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;

class VinylFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 50; $i++) {
            $artist = $this->getReference('artist-', $faker->numberBetween(1, 6));
            $vinyl = new Vinyl();
            $vinyl->setTitle($faker->sentence);
            $vinyl->setName('vinyl '.$i);
            $vinyl->setSlug($faker->slug);
            $vinyl->setContent($faker->text);
            $vinyl->setCreatedAt(new \DateTime('now'));
            $vinyl->setAttachment($faker->imageUrl(640,480, 'vinyls', true));
            $vinyl->setPrice($faker->randomFloat(2));
            $vinyl->setArtist($artist);
            $manager->persist($vinyl);

        }


   $manager->flush();
    }

}

