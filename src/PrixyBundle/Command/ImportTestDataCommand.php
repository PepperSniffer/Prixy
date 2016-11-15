<?php

namespace PrixyBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use PrixyBundle\Entity\formation;

class ImportTestDataCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('importFormation')
            ->setDescription('Import Formation from PrixyBundle/Data')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        print "\n";
        print "Import des Formations... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/formation.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);

                $ref = $text[0];
                $duree = $text[1];
                $tarif = (float) $text[2];

                $formation = $dm->getRepository('PrixyBundle:formation')->findOneByRef($ref);
                if(!$formation){
                    $formation = new formation();
                    $formation->setRef($ref);
                    $formation->setDuree($duree);
                    $formation->setTarif($tarif);

                    $dm->persist($formation);
                    $compteur_import++;
                }
                

            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import formations importées";
    }

}
