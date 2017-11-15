<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 03/11/2017
 * Time: 11:21
 */

namespace BctBundle\DataFixtures\ORM;

use BctBundle\Entity\Items;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ItemsData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $item = new Items();
        $item->setContenue('Saisie manuelle'); //self-monitoring
        $item->setTccSousCat($this->getReference('stcc'));
        $item->setAvantage('Les données peuvent être modifiées facilement.
Les saisies peuvent être réalisées à volonté, selon l\'envie de l\'utilisateur.');
        $item->setInconvenient('Peut être facilement fastidieux.
Risque d\'oublis fréquents. ');
        $item->setDetail('La saisie manuelle est utilisée pour tous les facteurs de risques comportementaux des MCV. Elle est utilisée pour quantifier la prise d\'alcool, de tabac, de nourriture ou l\'activité physique. Différents moyens sont utilisés :  
1. compteur  : l\'utilisation de + ou de - permet d\'afficher la quantité de verres consomés par exemple  
2. menu déroulant : l\'utilisateur navigue dans le menu pour sélectionner les aliments consomés ou l\'activité pratiquée. 
3. graphique : utilisation d\'icônes pour quantifier le nombre de verrres bus par exemple. 
4. saisie textuelle : pour ajouter des commentaires');
        $manager->persist($item);

        $item1 = new Items();
        $item1->setContenue('Saisie automatique'); // self monitoring
        $item1->setTccSousCat($this->getReference('stcc'));
        $item1->setAvantage('Enregistrement automatique des données. Rapide. Nombre de données exploitables importants.');
        $item1->setInconvenient('Dépend de la précision de l’appareil (smartphone)
L’utilisateur doit penser à activer son GPS avant de faire une activité.
L’aliment doit être référencer dans la base de données');
        $item1->setDetail('Utilisée principalement pour l’activité physique et la nutrition, le tracking utilise : 
1. le GPS pour tracker le parcours, la distance et la durée de la course. 
2. l’accéléromètre du smartphone pour compter automatiquement le nombre de pas
3. le lecteur de code barre pour avoir automatiquement les informations nutritionnelles des aliments');
        $manager->persist($item1);

        $item2 = new Items(); //feedback and performance
        $item2->setContenue('Tableau de bord résultats personnel');
        $item2->setTccSousCat($this->getReference('stcc1'));
        $item2->setAvantage('Résumé des infomations sur une seule page
Prise d\'information rapide.');
        $item2->setInconvenient('Information doivent être claire
Peu de place pour les explications');
        $item2->setDetail('Souvent utilisé comme page d\'accueil de l\'application, les tableaux de bord récapitulent les performances de l\'utilisateur. Ils sont souvent paramétrables (i.e. l\'utilisateur peut choisir les informations qu\'il souhaite voir apparaitre).
1. utilisation de graph pour permettre une visualisation rapide
2. utilisation d\'îcones pour simplifier l\'interface 
3.  accès au détail à partir des icônes.');
        $manager->persist($item2);

        $item5 = new Items();
        $item5->setContenue('Affichage');                            //Solicitation (teasing, notification, etc...)
        $item5->setTccSousCat($this->getReference('stcc4'));
        $item5->setAvantage('');
        $item5->setInconvenient('');
        $item5->setDetail('1. Sollicitation sous la forme de notification soit sur l\'écran principal du smartphone soit dans l\'application 
2. Donner envie de s\'inscrire dans le programme avec des images persuasives
3. Prévenir en mettant en évidence l\'information. ');
        $manager->persist($item5);

        $item6 = new Items();
        $item6->setContenue('Configuration');                            //Solicitation (teasing, notification, etc...)
        $item6->setTccSousCat($this->getReference('stcc4'));
        $item6->setAvantage('');
        $item6->setInconvenient('');
        $item6->setDetail('La plupart des applications proposent la configuration des rappels/notifications. Permet de modifier la fréquence des rappels ainsi que l\'heure et les effets sonores. Voir aussi personnalisation (lien XX)');
        $manager->persist($item6);

        $item7 = new Items();
        $item7->setContenue('Flux d\'activité');                            //social
        $item7->setTccSousCat($this->getReference('stcc21'));
        $item7->setAvantage('Motivationnel (rejoindre un groupe)');
        $item7->setInconvenient('');
        $item7->setDetail('Utilisée pour inciter à la pratique, les flux d\'actualités permettent à l\'utilisateur de voir des évènements ou des posts qui peuvent l\'intéresser et ainsi rejoindre la communauté pour partager à son tour ses expériences.
1. utilisation d\'images persuasives pour inciter les utilisateurs à s\'inscrire à suivre le flux d\'actualité.
2. Proposition d\'évènement en rapport avec les objectifs de l\'utilisateur 
3. Possibilité de partager à tous moments ou d\'ajouter des amis.');
        $manager->persist($item7);

        $item8 = new Items();
        $item8->setContenue('Chat en ligne');                            //social
        $item8->setTccSousCat($this->getReference('stcc21'));
        $item8->setAvantage('Conseils personnalisés en temps réél
Donne confiance à l\'utilisateur');
        $item8->setInconvenient('Nécessite la présence d\'une ressource humaine dédiée');
        $item8->setDetail('Donne la possibilité à l\'utilisateur d\'échanger avec une personne physique ou un robot (chat bot) : 
1. disponible en bas à droite de la page');
        $manager->persist($item8);



        $manager->flush();

        $this->addReference('item',$item);
        $this->addReference('item1', $item1);
        $this->addReference('item2', $item2);

        $this->addReference('item5', $item5);
        $this->addReference('item6', $item6);

        $this->addReference('item7', $item7);
        $this->addReference('item8', $item8);
    }

    public function getOrder()
    {
        return 4;
    }

}