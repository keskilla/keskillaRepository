<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 03/11/2017
 * Time: 11:10
 */

namespace BctBundle\Repository;


class ItemsRepository extends \Doctrine\ORM\EntityRepository
{

    

       // $qb = $this->createQueryBuilder('items')
        //    ->select

//   ->select('c')
            //   ->leftJoin('BctBundle:Media_items', 'mi', 'WITH', 'mi.id = c.id')
            //   ->leftJoin('BctBundle:Tcc_sous_cat', 'ct', 'WITH', 'ct.id = :ss')

            //      ->select('r')
            //      ->from('BctBundle:Media_items','a')
            //      ->innerJoin('r.items','m','WITH','r.id = m.id')


       //      ->where('ct.id = :ss')
            //       ->innerJoin('m.Tcc_sous_cat','a','WITH','m.id = r.Tcc_sous_cat')
            //      ->where('m.Tcc_sous_cat = :ss')

       //     ->setParameter('ss',$id);
    
}