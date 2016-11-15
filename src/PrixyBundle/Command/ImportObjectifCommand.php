<?php

namespace PrixyBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use PrixyBundle\Entity\objectif;
use PrixyBundle\Entity\formation;

class ImportObjectifCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('importObjectif')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        print "\n";
        print "Import des Objectifs... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/objectif.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                
                $text = explode(',', $line);

                $lib = $text[1];

                $objectif = $dm->getRepository('PrixyBundle:objectif')->findOneByLibelle($lib);
                if(!$objectif){
                    $objectif = new objectif();
                    $objectif->setLibelle($lib);

                    $dm->persist($objectif);
                    $compteur_import++;
                }


            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import objectifs importées\n";

        /*IMPORT DES LIENS CERTIF FORMATION*/
        print "\n";
        print "Import des lien objectifs - formation... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/lien_formation_objectif.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);

                $ref_form = $text[0];
                $lib_obj = $text[1];

                $objectif = $dm->getRepository('PrixyBundle:objectif')->findOneByLibelle($lib_obj);
                $formation = $dm->getRepository('PrixyBundle:formation')->findOneByRef($ref_form);

                
                if ($formation && $objectif) {
                    $formation->setObjectif($objectif);
                    $objectif->addFormation($formation);

                    $dm->persist($objectif);
                    $dm->persist($formation);

                    $compteur_import++ ;

                }

            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import lien formations-objectif importées\n";
    }

}
