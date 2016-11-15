<?php

namespace PrixyBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use PrixyBundle\Entity\details_formation;
use PrixyBundle\Entity\ligne_competence;

class ImportLigneCompetenceCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('importLigneCompetence')
            ->setDescription('...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        print "\n";
        print "Import des Lignes de Competence... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/ligne_competence.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);

                $lib = $text[1];

                $ligne_comp = $dm->getRepository('PrixyBundle:ligne_competence')->findOneByLibelle($lib);
                if(!$ligne_comp){
                    $ligne_comp = new ligne_competence();
                    $ligne_comp->setLibelle($lib);

                    $dm->persist($ligne_comp);
                    $compteur_import++;
                }


            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import ligne competences importées";








        /****IMPORT DES LIENS*****/
        /*************************/
        print "\n";
        print "Import des liens Lignes de competences... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/lien_detail_ligne.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);

                $titre_detail = $text[0];
                $lib_comp = $text[1];

                $detail_formation = $dm->getRepository('PrixyBundle:details_formation')->findOneByTitre($titre_detail);
                $ligne_comp = $dm->getRepository('PrixyBundle:ligne_competence')->findOneByLibelle($lib_comp);
                if($detail_formation && $ligne_comp){
                    $detail_formation->addLignesFormation($ligne_comp);
                    $ligne_comp->setDetailsFormation($detail_formation);

                    $dm->persist($detail_formation);
                    $dm->persist($ligne_comp);
                    $compteur_import++;

                }


            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import liens ligne competence importées";
    }

}
