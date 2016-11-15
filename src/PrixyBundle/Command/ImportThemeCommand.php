<?php

namespace PrixyBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use PrixyBundle\Entity\formation;
use PrixyBundle\Entity\theme;

class ImportThemeCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('importTheme')
            ->setDescription('...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        print "\n";
        print "Import des theme... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/theme.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);

                $lib = $text[1];

                $theme = $dm->getRepository('PrixyBundle:theme')->findOneByLibelle($lib);
                if(!$theme){
                    $theme = new theme();
                    $theme->setLibelle($lib);

                    $dm->persist($theme);
                    $compteur_import++;
                }
                

            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import theme importées\n";

        /*IMPORT DES LIENS CERTIF FORMATION*/
        print "\n";
        print "Import des lien theme - formation... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/lien_formation_theme.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);

                $ref_form = $text[0];
                $lib_theme = $text[1];


                $theme = $dm->getRepository('PrixyBundle:theme')->findOneByLibelle($lib_theme);
                $formation = $dm->getRepository('PrixyBundle:formation')->findOneByRef($ref_form);

                if ($formation && $theme) {
                    $formation->addTheme($theme);
                    $theme->addFormation($formation);

                    $dm->persist($theme);
                    $dm->persist($formation);

                    $compteur_import++ ;

                }

            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import lien formations-theme importées\n";

    }

}
