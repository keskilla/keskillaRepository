<?php

namespace BctBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use BctBundle\Entity\Tcc_sous_cat;

class Tcc_sous_catData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tcc_sc = new Tcc_sous_cat();
        $tcc_sc->setTccPrincipale($this->getReference('tcc1'));
        $tcc_sc->setNomSc('self monitoring');
        $tcc_sc->setDescriptionFr('Ces initiatives peuvent être 1/ des saisies mauelles de l\'utilisateur, 2/ des récupérations automatiques des données d\'activité de l\'utilisateur.');

        $manager->persist($tcc_sc);

        $tcc_sc1 = new Tcc_sous_cat();
        $tcc_sc1->setTccPrincipale($this->getReference('tcc1'));
        $tcc_sc1->setNomSc('Feedback and performance');
        $tcc_sc1->setDescriptionFr('Ils s\'adressent à l\'utilisateurs pour comparer ses résultats 1/ aux autres 2/ avec soi-même');

        $manager->persist($tcc_sc1);

        $tcc_sc11 = new Tcc_sous_cat();
        $tcc_sc11->setTccPrincipale($this->getReference('tcc2'));
        $tcc_sc11->setNomSc('General individual Feedback');
        $tcc_sc11->setDescriptionFr('Ils sont présentés sous la forme de tableau de bord à partir de l\'écran d\'accueil de l\'appliacation ou du menu');

        $manager->persist($tcc_sc11);

        $tcc_sc2 = new Tcc_sous_cat();
        $tcc_sc2->setTccPrincipale($this->getReference('tcc3'));
        $tcc_sc2->setNomSc('Social support');
        $tcc_sc2->setDescriptionFr('Principalement utilisé sous la forme de 1/ flux d\'activité ou de proposition à la participation à des évènements 2/ chat en ligne.');

        $manager->persist($tcc_sc2);

        $tcc_sc21 = new Tcc_sous_cat();
        $tcc_sc21->setTccPrincipale($this->getReference('tcc3'));
        $tcc_sc21->setNomSc('Testimonials/quotes');
        $tcc_sc21->setDescriptionFr('Ils sont présentés sous la forme de blog ou témoignages accéssibles dans un menu dédié. ');

        $manager->persist($tcc_sc21);

        $tcc_sc23 = new Tcc_sous_cat();
        $tcc_sc23->setTccPrincipale($this->getReference('tcc3'));
        $tcc_sc23->setNomSc('Social sharing');
        $tcc_sc23->setDescriptionFr('Possibilité de partager des performances, photos, article etc… à ses contacts ou groupe d\'appartenance');

        $manager->persist($tcc_sc23);

        $tcc_sc24 = new Tcc_sous_cat();
        $tcc_sc24->setTccPrincipale($this->getReference('tcc3'));
        $tcc_sc24->setNomSc('Provide opportunities for social comparison');
        $tcc_sc24->setDescriptionFr('Donne la possibilité de se comparer aux autres en invitant ou incitant les utilisateurs à rejoindre un groupe');

        $manager->persist($tcc_sc24);

        $tcc_sc25 = new Tcc_sous_cat();
        $tcc_sc25->setTccPrincipale($this->getReference('tcc3'));
        $tcc_sc25->setNomSc('Motivational interviewing');
        $tcc_sc25->setDescriptionFr('Présenté sous la forme de pop-up pour motiver l\'utilisateur à atteindre ses objectifs en fonction de ce qu\'il saisit ou pas.');

        $manager->persist($tcc_sc25);

        $tcc_sc26 = new Tcc_sous_cat(); //solution teasing
        $tcc_sc26->setTccPrincipale($this->getReference('tcc4'));
        $tcc_sc26->setNomSc('solicitation (teasing, notification, etc...)');
        $tcc_sc26->setDescriptionFr('Elles peuvent être généralement configurées par l\'utilisateur. Une fois configurer les sollicitations peuvent être automatique sous la forme de notifications ou incitative à l\'aide d\'images par exemple.');
        $manager->persist($tcc_sc26);

        $manager->flush();

        $this->addReference('stcc', $tcc_sc);
        $this->addReference('stcc1', $tcc_sc1);
        $this->addReference('stcc21', $tcc_sc2);
        
        $this->addReference('stcc2', $tcc_sc11);
        $this->addReference('stcc7', $tcc_sc21);
        $this->addReference('stcc3', $tcc_sc23);
        $this->addReference('stcc5', $tcc_sc24);
        $this->addReference('stcc6', $tcc_sc25);
        $this->addReference('stcc4', $tcc_sc26);
    }
    public function getOrder()
    {
        return 3;
    }
}