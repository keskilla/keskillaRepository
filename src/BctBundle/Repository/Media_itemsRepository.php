<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 03/11/2017
 * Time: 13:47
 */

namespace BctBundle\Repository;

use Doctrine\ORM\Query\Expr\Join;

class Media_itemsRepository extends \Doctrine\ORM\EntityRepository
{
    public function findBySS($id)
    {
        $query = $this->getEntityManager()->createQuery('SELECT m FROM BctBundle:Media_items m
                JOIN BctBundle:Items e WITH e.id = m.item
                JOIN BctBundle:Tcc_sous_cat t WITH t.id = e.Tcc_sous_cat
                WHERE t.id = :id');
        $query->setParameter('id',$id);

        $object = $query->getResult();
        return $object;

       // var_dump($query->getSQL());die();
       // return $query->execute();
    }

    public function findByMi($id){

        $query = $this->getEntityManager()->createQuery('SELECT m FROM BctBundle:Media_items m
                JOIN BctBundle:Items e WITH e.id = m.item
                JOIN BctBundle:Tcc_sous_cat t WITH t.id = e.Tcc_sous_cat
                WHERE e.id = :id');
        $query->setParameter('id',$id);

        $object = $query->getResult();
        return $object;
    }

 //select media_items.alt, media_items.path from media_items
    // join items on items.id = media_items.items_id
    // join tcc_sous_cat on tcc_sous_cat.id = items.tcc_sous_cat_id
    // where tcc_sous_cat.id = 64   

}