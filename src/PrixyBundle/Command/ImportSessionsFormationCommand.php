<?php

namespace PrixyBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use PrixyBundle\Entity\session_formation;
use PrixyBundle\Entity\formation;
use \DateTime ;

class ImportSessionsFormationCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('importSessionsFormation')
            ->setDescription('...')
        ;
    }
        /////////////ICI A CONTINUER !!!!!!!!!!!
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        print "\n";
        print "Import des Sessions de formations... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/sessions_formations.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                
                $text = explode(',', $line);

                $date = DateTime::createFromFormat('d/m/Y', $text[1]);

                $session_formation = $dm->getRepository('PrixyBundle:session_formation')->findOneByDate($date);
                if(!$session_formation){
                    $session_formation = new session_formation();
                    $session_formation->setDate($date);
                    $dm->persist($session_formation);
                    $compteur_import++;
                }


            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import session_formations importées\n";

        //IMPORT DES LIENS CERTIF FORMATION
        print "\n";
        print "Import des lien session_formations - formation... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/lien_sessions_formations.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);
                
                $ref_form = $text[1];
                
                $date_session = DateTime::createFromFormat('d/m/Y', $text[0]);


                $session_formation = $dm->getRepository('PrixyBundle:session_formation')->findOneByDate($date_session);
                $formation = $dm->getRepository('PrixyBundle:formation')->findOneByRef($ref_form);

                
                if ($formation && $session_formation) {
                    $formation->setSessionFormation($session_formation);
                    $session_formation->addFormation($formation);

                    $dm->persist($session_formation);
                    $dm->persist($formation);

                    $compteur_import++ ;

                }

            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import lien formations-session_formation importées\n";
    }

}
