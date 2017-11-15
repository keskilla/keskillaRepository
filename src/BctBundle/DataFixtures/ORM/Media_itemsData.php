<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 06/11/2017
 * Time: 10:37
 */

namespace BctBundle\DataFixtures\ORM;


use BctBundle\Entity\Media_items;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Media_itemsData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $item_m = new Media_items();
        $item_m->setAlt('saisie manuelle');
        $item_m->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-bKyWqfTZ_JNJn4DHI7ljQMetbp7xWzBXMB933Oq71O6uZbZ');
        $item_m->setItems($this->getReference('item'));
        $manager->persist($item_m);

        $item_m1 = new Media_items();
        $item_m1->setAlt('saisie automatique');
        $item_m1->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-bKyWqfTZ_JNJn4DHI7ljQMetbp7xWzBXMB933Oq71O6uZbZ');
        $item_m1->setItems($this->getReference('item1'));
        $manager->persist($item_m1);

        $item_m2 = new Media_items();
        $item_m2->setAlt('Tableau de bord résultats personnel');
        $item_m2->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-bKyWqfTZ_JNJn4DHI7ljQMetbp7xWzBXMB933Oq71O6uZbZ');
        $item_m2->setItems($this->getReference('item2'));
        $manager->persist($item_m2);

        $item_m5 = new Media_items();
        $item_m5->setAlt('affichage'); //Solicitation (teasing, notification, etc...)
        $item_m5->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-bKyWqfTZ_JNJn4DHI7ljQMetbp7xWzBXMB933Oq71O6uZbZ');
        $item_m5->setItems($this->getReference('item5'));
        $manager->persist($item_m5);

        $item_m6 = new Media_items();
        $item_m6->setAlt('configuration'); //Solicitation (teasing, notification, etc...)
        $item_m6->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-bKyWqfTZ_JNJn4DHI7ljQMetbp7xWzBXMB933Oq71O6uZbZ');
        $item_m6->setItems($this->getReference('item6'));
        $manager->persist($item_m6);

        $item_m7 = new Media_items();
        $item_m7->setAlt('flux_dactivite'); //social
        $item_m7->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-bKyWqfTZ_JNJn4DHI7ljQMetbp7xWzBXMB933Oq71O6uZbZ');
        $item_m7->setItems($this->getReference('item7'));
        $manager->persist($item_m7);

        $item_m8 = new Media_items();
        $item_m8->setAlt('chat_ligne'); //social
        $item_m8->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-bKyWqfTZ_JNJn4DHI7ljQMetbp7xWzBXMB933Oq71O6uZbZ');
        $item_m8->setItems($this->getReference('item8'));
        $manager->persist($item_m8);



        $manager->flush();
    }


    public function getOrder()
    {
        return 5;
    }
}