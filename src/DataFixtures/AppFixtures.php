<?php

namespace App\DataFixtures;

use App\Entity\Agent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{

    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
        
    }

    public function load(ObjectManager $manager): void
    {
        //agents
        $agents =[];
        for ($i=0; $i < 50; $i++) { 
            $agent = new Agent();
            $agent->setName($this->faker->name())
                ->setFirstName($this->faker->firstName())
                ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
                ->setIdentificationCode(mt_rand(0, 10000));
                $agents[] = $agent;
                $manager->persist($agent);   
        }
        
       
        
        $manager->flush();
    }
}
