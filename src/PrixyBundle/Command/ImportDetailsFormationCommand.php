<?php

namespace PrixyBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use PrixyBundle\Entity\details_formation;
use PrixyBundle\Entity\formation;

class ImportDetailsFormationCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('importDetailsFormation')
            ->setDescription('...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        print "\n";
        print "Import des Details de Formations... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/detail_formation.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);

                $titre = $text[1];

                $detail_formation = $dm->getRepository('PrixyBundle:details_formation')->findOneByTitre($titre);
                if(!$detail_formation){
                    $detail_formation = new details_formation();
                    $detail_formation->setTitre($titre);

                    $dm->persist($detail_formation);
                    $compteur_import++;
                }


            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import detail formations importées";








        /****IMPORT DES LIENS*****/
        /*************************/
        print "\n";
        print "Import des Details de Formations... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/lien_formation_detail.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);
                $ref_form = $text[0];
                $titre_detail = $text[1];

                $detail_formation = $dm->getRepository('PrixyBundle:details_formation')->findOneByTitre($titre_detail);
//                $formation = $dm->getRepository('PrixyBundle:formation')->findOneByRef($ref_form);
                $formation = $dm->getRepository('PrixyBundle:formation')->findOneByRef($ref_form);
                if($detail_formation && $formation){

                    $detail_formation->setFormation($formation);
                    $formation->addDetailsFormation($detail_formation);

                    $dm->persist($detail_formation);
                    $dm->persist($formation);
                    $compteur_import++;
                }


            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import liens detail formations importées";





    }

}
