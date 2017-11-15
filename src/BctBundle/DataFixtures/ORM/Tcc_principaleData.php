<?php
namespace BctBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use BctBundle\Entity\Tcc_principale;
use BctBundle\Entity\Media;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Tcc_principaleData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $tcc1 = new Tcc_principale(); // tracking et monitoring
        $tcc1->setImage($this->getReference('media'));
        $tcc1->setNomBct('Tracking & Monitoring');

        $tcc1->setPriorite(9);
        $tcc1->setDefFr('Cette TCC rassemble toutes les initiatives de saisies faites par l\'utilisateur, e.g. les saisies de poids, de nombre de cigarettes fumées, etc.');
        $tcc1->setDefEn('translate in progress');
        $manager->persist($tcc1);

        $tcc2 = new Tcc_principale();   //feedback
        $tcc2->setImage($this->getReference('media1'));
        $tcc2->setNomBct('Audio, Visual and Textual Feedback');

        $tcc2->setPriorite(1);
        $tcc2->setDefFr('Cette TCC rassemble tous les exemples de retour faits à l\'utilisateurs selon qu\'ils soient accès sur la performance (2.1 Feedback on performance) comme par ex. "avatar giving information on performance"[439]  ou qu\'ils soient plus généraliste 2.2 General individual Feedback. Les feedbacks sont représentés sous une multitude de forme : notification sous forme de sms, mail, tableau de bord avec des graph, avatar, widget....');
        $tcc2->setDefEn('translate in progress');
        $manager->persist($tcc2);

        $tcc3 = new Tcc_principale(); //social support
        $tcc3->setImage($this->getReference('media2'));
        $tcc3->setNomBct('Social support, sharing and comparison');

        $tcc3->setPriorite(2);
        $tcc3->setDefFr('Cette TCC rassemble toutes les techniques de changement de comportement où l\'action d\'une tierce personne permet de motiver l\'utilisateur : social support avec par ex. la présence d\'un chat ou d\'un forum , planning social support avec par ex. créer des opportunités/évènements pour rassembler des gens, identification of role model avec par ex. créer un avatar pour montrer le modèle à suivre, testimonials/quotes avec par ex. des témoignages d\'autres utilisateurs, social sharing avec par ex. le partage de ses résultats sur les réseaux sociaux, provide opportunities for social comparison avec par ex. l\'utilisation d\'un avatar qui reflète l\'activité du participant, plan social change qui donne des conseils pour changer ses habitudes lors de ses sorties par exemple, Motivational interviewing  avec par ex. un entretien avec un médecin et/ou une infirmière.');
        $tcc3->setDefEn('translate in progress');
        $manager->persist($tcc3);

        $tcc4 = new Tcc_principale(); //persuavive message
        $tcc4->setNomBct('Persuasive messages, reminder and alert');
        $tcc4->setImage($this->getReference('media3'));
        $tcc4->setPriorite(5);
        $tcc4->setDefFr('Cette TCC regroupe tous les articles utilisant des médias de type notifications, mail, update pour garder l\'utilisateur engagé dans l\'utilisation de l\'application. les tournures de phrases utilisées sont souvent écrites de manière amicale, voire sur le ton de la plaisanterie utilisant préférentiellement des "nous" ou "notre équipe" pour s\'adresser au participants. Dans cette catégorie on retrouve également les idemnisations de participation sous la forme mensuelle ou ponctuelle avec les cartes cadeaux ou des loteries.   ');
        $tcc4->setDefEn('translate in progress');
        $manager->persist($tcc4);

        $tcc5 = new Tcc_principale(); //Rewards
        $tcc5->setImage($this->getReference('media4'));
        $tcc5->setNomBct('Rewards');

        $tcc5->setPriorite(10);
        $tcc5->setDefFr('Cette TCC regroupe tous les articles utilisant des récompenses virtuelles pour encourager les participants. Ces récompenses sont principalement affichées sous la forme d\'images (par ex. médaille).
Les rewerds peuvent être envoyé à l\'utilisateur 1/ sous la forme de pop-up après la réalisation d\'un exercice ou 2/ en consultation à la demande de l\'utilisateur.');
        $tcc5->setDefEn('translate in progress');
        $manager->persist($tcc5);

        $tcc6 = new Tcc_principale(); //persuavive message
        $tcc6->setImage($this->getReference('media5'));
        $tcc6->setNomBct('Goal setting & Objectives');
        $tcc6->setPriorite(3);
        $tcc6->setDefFr('Cette TCC assemble les TCC en rapport avec la détermination d\'un objectif et/ou les solutions proposées pour l\'atteindre : 6.1 Goal setting avec par exemple la possibilité de créer de nouveaux objectifs, action planning avec la création/proposition et la mise à disposition d\'un calendrier permettant de planifier son activité, set graded task en donnant des objectifs accessibles, reviews of behavior goal fixant des objectifs prioritaires, problem solving dans le cas où les utilisateurs n\'arrivent pas à atteindre les buts fixés ou dans le but de prévenir d\'une rechute ; ils sont essentiellement donnés sous la forme de tips.');
        $tcc6->setDefEn('translate in progress');
        $manager->persist($tcc6);

        $tcc7 = new Tcc_principale();
        $tcc7->setImage($this->getReference('media6'));
        $tcc7->setNomBct('Tailoring, Personalization and customization');
        $tcc7->setPriorite(8);
        $tcc7->setDefFr('Cette TCC donne les TCC permettant d\'adapter le contenu de l\'application aux habitudes alimentaires et/ou sportives de l\'utilisateur. Cela passe par la création d\'un compte utilisateur pour connaitre ses habitudes. Alors l\'application peut lui proposer une extension de la base de données de recettes par exemple ou des menus avec ses plats préférés.');
        $tcc7->setDefEn('translate in progress');
        $manager->persist($tcc7);

        $tcc8 = new Tcc_principale();
        $tcc8->setImage($this->getReference('media7'));
        $tcc8->setNomBct('Cooperation & Collaboration');
        $tcc8->setPriorite(15);
        $tcc8->setDefFr('Cette TCC regroupe les TCC favorisant la coopération et la collaboration entre l\'utilisateur et l\'application en utilisant des feedbacks coopératifs, empathiques et optimistes. Les tutoriels de formation sont également classés dans cette catégorie.');
        $tcc8->setDefEn('translate in progress');
        $manager->persist($tcc7);

        $tcc81 = new Tcc_principale();
        $tcc81->setImage($this->getReference('media8'));
        $tcc81->setNomBct('Virtual rehearsal and simulation');
        $tcc81->setPriorite(14);
        $tcc81->setDefFr('Cette TCC regroupe les techniques permettant d\'accompagner l\'utilisateur dans la bonne réalisation de l\'exercice par exemple à l\'aide d\'une vidéo de démonstration.');
        $tcc81->setDefEn('translate in progress');
        $manager->persist($tcc81);

        $tcc9 = new Tcc_principale();
        $tcc9->setImage($this->getReference('media9'));
        $tcc9->setNomBct('Emoticons & Persuasive images');
        $tcc9->setPriorite(13);
        $tcc9->setDefFr('Cette TCC regroupe les TCC utilisant des images attractives ou des avatars permettant de motiver l\'utilisateur ou au contraire de le "dégouter" (e.g. sous la forme d\'images chocs).');
        $tcc9->setDefEn('translate in progress');
        $manager->persist($tcc9);

       $manager->flush();
//
        $this->addReference('tcc1',$tcc1);
        $this->addReference('tcc2', $tcc2);
        $this->addReference('tcc3', $tcc3);
        $this->addReference('tcc4', $tcc4);
        $this->addReference('tcc5', $tcc5);
        $this->addReference('tcc6', $tcc6);
        $this->addReference('tcc7', $tcc7);
        $this->addReference('tcc8', $tcc8);
        $this->addReference('tcc9', $tcc9);
        
    }
    public function getOrder()
    {
        return 2;
    }
}