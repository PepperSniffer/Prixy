<?php

namespace PrixyBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use PrixyBundle\Entity\certification;
use PrixyBundle\Entity\formation;


class ImportCertificationCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('importCertification')
            ->setDescription('...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        print "\n";
        print "Import des certifications... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/certification.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);

                $lib = $text[1];

                $certification = $dm->getRepository('PrixyBundle:certification')->findOneByLibelle($lib);
                if(!$certification){
                    $certification = new certification();
                    $certification->setLibelle($lib);

                    $dm->persist($certification);
                    $compteur_import++;
                }
                

            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import certifications importées\n";

        /*IMPORT DES LIENS CERTIF FORMATION*/
        print "\n";
        print "Import des lien certifications - formation... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/lien_formation_certification.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);

                $ref_form = $text[0];
                $ref_cert = $text[1];


                $certification = $dm->getRepository('PrixyBundle:certification')->findOneByLibelle($ref_cert);
                $formation = $dm->getRepository('PrixyBundle:formation')->findOneByRef($ref_form);

                if ($formation && $certification) {
                    $formation->addCertification($certification);
                    $certification->addFormation($formation);

                    $dm->persist($certification);
                    $dm->persist($formation);

                    $compteur_import++ ;

                }

            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import lien formations-certifications importées\n";

    }

}
