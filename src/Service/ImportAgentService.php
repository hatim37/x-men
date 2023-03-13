<?php

namespace App\Service;

use App\Entity\Agent;
use App\Repository\AgentRepository;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;
use Symfony\Component\Console\Style\SymfonyStyle;
use Faker\Factory;
use Faker\Generator;

class ImportAgentService
{
    private Generator $faker;
    private $agentRepository;

    public function __construct(AgentRepository $agentRepository, private EntityManagerInterface $em)
    {
        $this->faker = Factory::create('fr_FR');
        $this->agentRepository = $agentRepository;
    }


    public function importAgent(SymfonyStyle $io): void
    {
        $io->title('importations des agents en base de données');

        $agent =$this->readCsvFile();

        $io->progressStart(count($agent));

        foreach ($agent as $arrayAgent) {

            $io->progressAdvance();
            $agent = $this->createOrUpdateAgent($arrayAgent);
            $this->em->persist($agent);
            
        }

        $this->em->flush();

        $io->progressFinish();

        $io->success('Importation terminée');
    }

    private function readCsvFile(): Reader
    {
        
        $csv = Reader::createFromPath('%kernel.root_dir%/../import/agent.csv', 'r');
        $csv->setHeaderOffset(0);

        return $csv;
    }



    private function createOrUpdateAgent(array $arrayAgent): Agent
    {
        $agent = $this->agentRepository->findOneBy(['name' => $arrayAgent['name']]);

        if (!$agent) {
            $agent = new Agent();
        }

        $agent->setName($arrayAgent['name'])
            ->setFirstName($arrayAgent['first_name'])
            ->setDateOfBirth($this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-22 years', $timezone = null))
            ->setIdentificationCode($arrayAgent['identification_code'])

        ;


        return $agent;
    }
}