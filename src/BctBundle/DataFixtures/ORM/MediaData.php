<?php
namespace BctBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use BctBundle\Entity\Media;
use BctBundle\Entity\Tcc_principale;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MediaData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
            $media = new Media();
            $media->setAlt('nmonitoring');
            $media->setPath('https://img4.hostingpics.net/pics/380716trackingmonitoring.jpg');

            $manager->persist($media);
        
            $media1 = new Media();
            $media1->setAlt('noAlcool');
            $media1->setPath('https://img4.hostingpics.net/pics/269868stopalc.jpg');

            $manager->persist($media1);

            $media2 = new Media();
            $media2->setAlt('self-monitoring');
            $media2->setPath('https://img4.hostingpics.net/pics/989007selfmonitoring.gif');

            $manager->persist($media2);
//
            $media3 = new Media();
            $media3->setAlt('feedback');
            $media3->setPath('https://img4.hostingpics.net/pics/748141customerfeedback.jpg');

            $manager->persist($media3);

            $media4 = new Media();
            $media4->setAlt('social_support');
            $media4->setPath('https://img4.hostingpics.net/pics/596039Socialsupport.jpg');

            $manager->persist($media4);

            $media5 = new Media();
            $media5->setAlt('persuasive_message');
            $media5->setPath('http://3.bp.blogspot.com/-dbvZg87yiXU/TeFUwNSRONI/AAAAAAAACyE/64Qj2np1UnQ/s200/tips.jpg');

            $manager->persist($media5);

            $media6 = new Media();
            $media6->setAlt('reward');
            $media6->setPath('http://webhow.org/qa-theme/Default/web-how-prizes-rewards.jpg');

            $manager->persist($media6);

            $media7 = new Media();
            $media7->setAlt('objectif');
            $media7->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-bKyWqfTZ_JNJn4DHI7ljQMetbp7xWzBXMB933Oq71O6uZbZ');

            $manager->persist($media7);

            $media8 = new Media(); // pas d'image
            $media8->setAlt('pas_dimage');
            $media8->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-bKyWqfTZ_JNJn4DHI7ljQMetbp7xWzBXMB933Oq71O6uZbZ');
            $manager->persist($media8);

            $media9 = new Media(); // pas d'image
            $media9->setAlt('pas_dimage');
            $media9->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-bKyWqfTZ_JNJn4DHI7ljQMetbp7xWzBXMB933Oq71O6uZbZ');
            $manager->persist($media9);

            $media10 = new Media(); // pas d'image
            $media10->setAlt('pas_dimage');
            $media10->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-bKyWqfTZ_JNJn4DHI7ljQMetbp7xWzBXMB933Oq71O6uZbZ');

            $manager->persist($media10);

            $manager->flush();

            $this->addReference('media', $media);
            $this->addReference('media1', $media1);
            $this->addReference('media2', $media2);
            $this->addReference('media3', $media3);
            $this->addReference('media4', $media4);
            $this->addReference('media5', $media5);
            $this->addReference('media6', $media6);
            $this->addReference('media7', $media7);
            $this->addReference('media8', $media8);
            $this->addReference('media9', $media9);
            $this->addReference('media10', $media10);
            
    }
    public function getOrder()
    {
        return 1;
    }
}