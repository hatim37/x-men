<?php

namespace App\DataFixtures;

use App\Entity\Agent;
use App\Entity\Cible;
use App\Entity\Contact;
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
        
        //Agents
        $xavier = new Agent;
        $xavier->setName('Xavier')
            ->setFirstName('Charles')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setIdentificationCode(mt_rand(0, 10000));
            $manager->persist($xavier);

        $cyclope = new Agent;
        $cyclope->setName('Cyclope')
            ->setFirstName('Scotts')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setIdentificationCode(mt_rand(0, 10000));
            $manager->persist($cyclope);

        $logan = new Agent;
        $logan->setName('Wolverine')
            ->setFirstName('Logan')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setIdentificationCode(mt_rand(0, 10000));
            $manager->persist($logan);

        $magneto = new Agent;
        $magneto->setName('Magneto')
            ->setFirstName('Erik')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setIdentificationCode(mt_rand(0, 10000));
            $manager->persist($magneto);
    
        $xavier = new Agent;
        $xavier->setName('Mystique')
            ->setFirstName('Raven')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setIdentificationCode(mt_rand(0, 10000));
            $manager->persist($xavier);

        $xavier = new Agent;
        $xavier->setName('Xavier')
            ->setFirstName('Charles')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setIdentificationCode(mt_rand(0, 10000));
            $manager->persist($xavier);

        $xavier = new Agent;
        $xavier->setName('Logan')
            ->setFirstName('James')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setIdentificationCode(mt_rand(0, 10000));
            $manager->persist($xavier);

        $xavier = new Agent;
        $xavier->setName('Jean')
            ->setFirstName('Grey')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setIdentificationCode(mt_rand(0, 10000));
            $manager->persist($xavier);

        $xavier = new Agent;
        $xavier->setName('Peter')
            ->setFirstName('Maximoff')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setIdentificationCode(mt_rand(0, 10000));
            $manager->persist($xavier);

        $xavier = new Agent;
        $xavier->setName('Tornade')
            ->setFirstName('Ororo')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setIdentificationCode(mt_rand(0, 10000));
            $manager->persist($xavier);


        //Cibles   //----------------------------------------------------------------------------------

        $crapeau = new Cible;
        $crapeau->setName('Mortimer')
            ->setFirstName('Toynbee')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Le Crapaud');
            $manager->persist($crapeau);

        $sabertooth = new Cible;
        $sabertooth->setName('Creed')
            ->setFirstName('Victor')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Dent de Sabre');
            $manager->persist($sabertooth);
        
        $pyro = new Cible;
        $pyro->setName('John')
            ->setFirstName('Allerodyce')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Pyro');
            $manager->persist($pyro);

        $acier = new Cible;
        $acier->setName('Marko')
            ->setFirstName('Caïn')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Tête d\'acier');
            $manager->persist($acier);

        $multiple = new Cible;
        $multiple->setName('James')
            ->setFirstName('Madrox')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Multiple-Man');
            $manager->persist($multiple);

        $arclight = new Cible;
        $arclight->setName('Philippa')
            ->setFirstName('Sontag')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('PArclight');
            $manager->persist($arclight);

        
        $docteur = new Cible;
        $docteur->setName('Sébastian')
            ->setFirstName('Shaw')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Docteur');
            $manager->persist($docteur);
       
        $cinetique = new Cible;
        $cinetique->setName('Remy')
            ->setFirstName('LeBeau')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('force cinétique');
            $manager->persist($cinetique);

        $vipere = new Cible;
        $vipere->setName('Ophelia')
            ->setFirstName('Sarkissian')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Vipère');
            $manager->persist($vipere);

        $lady = new Cible;
        $lady->setName('Yuriko')
            ->setFirstName('Oyama')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Lady griffe');
            $manager->persist($lady);


        //Contact  //-----------------------------------------------------


        $iceberg = new Contact;
        $iceberg->setName('Bobby')
            ->setFirstName('Drake')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Iceberg');
            $manager->persist($iceberg);

        $rocket = new Contact;
        $rocket->setName('Sam')
            ->setFirstName('Guthrie ')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Rocket ');
            $manager->persist($rocket);
        
        $jubile = new Contact;
        $jubile->setName('Jubilation')
            ->setFirstName('Lee')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Jubilé');
            $manager->persist($jubile);

        $technokinesiste = new Contact;
        $technokinesiste->setName('Chris')
            ->setFirstName('Bradley')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Technokinésiste');
            $manager->persist($technokinesiste);

        $multiple = new Contact;
        $multiple->setName('James')
            ->setFirstName('Madrox')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Multiple-Man');
            $manager->persist($multiple);

        $fauve = new Contact;
        $fauve->setName('Hank')
            ->setFirstName('Philip')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Le fauve');
            $manager->persist($fauve);

        
        $X = new Contact;
        $X->setName('Laura')
            ->setFirstName('Kinney')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('X-23');
            $manager->persist($X);
       
        $yashida = new Contact;
        $yashida->setName('Mariko')
            ->setFirstName('Yashida')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('fille de Yashida');
            $manager->persist($yashida);

        $medecin = new Contact;
        $medecin->setName('Moira')
            ->setFirstName('Sarkissian')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Medecin');
            $manager->persist($medecin);

        $volante = new Contact;
        $volante->setName('Angel')
            ->setFirstName('Salvadore')
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setCodeName('Volante');
            $manager->persist($volante);


        
        $manager->flush();
    }
}
