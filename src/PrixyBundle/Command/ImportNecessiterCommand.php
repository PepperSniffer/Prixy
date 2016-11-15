<?php

namespace PrixyBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class ImportNecessiterCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('importNecessiter')
            ->setDescription('...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        print "\n";
        print "Import des Necessitée entre formations... ";


        $dm = $this->getContainer()->get('doctrine')->getManager();

        $csv = file('C:/wamp/apps/Prixy/src/PrixyBundle/Data/necessiter.csv');
        $i=0;
        $compteur_import =0;
        foreach ($csv as $line){
            $line = substr($line,0,strlen($line)-2);
            if ($i > 0){
                $text = explode(',', $line);

                $ref_form1 = $text[0];
                $ref_form2 = $text[1];

                $formation1 = $dm->getRepository('PrixyBundle:formation')->findOneByRef($ref_form1);
                $formation2 = $dm->getRepository('PrixyBundle:formation')->findOneByRef($ref_form2);
                
                if($formation1 && $formation2){
                    $formation1->addRequiert($formation2);
                    $formation2->addEstRequisPour($formation1);
                    $dm->persist($formation1);
                    $dm->persist($formation2);
                    $compteur_import++;
                }
                

            }
            $i++;
        }

        $dm->flush();
        $dm->clear();
        print "\n$compteur_import lien_formations_formations importées";
    }

}
