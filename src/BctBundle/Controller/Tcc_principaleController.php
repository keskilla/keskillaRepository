<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 27/10/2017
 * Time: 12:37
 */

namespace BctBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class Tcc_principaleController extends Controller
{
    /**
     * @Route("{_locale}/home", name="accueil")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tcc = $em->getRepository('BctBundle:Tcc_principale')->findBy(array(),array('priorite'=>'ASC')); // trier par ordre de priorité
        return $this->render('BctBundle:Home:home.html.twig',array('tcc'=>$tcc));
    }

    // affiche les sous tcc correspondante

    /**
     * @Route("{_locale}/categories/{tccs}", name="tcc_sous_cat")
     */
    public function afficheSousTccAction($tccs)
    {                                                  
        $em = $this->getDoctrine()->getManager();//findAll();

        $tcc_principale = $em->getRepository('BctBundle:Tcc_principale')->find($tccs); // on récupère l'id de la tcc principale
        $tcc_sousCat = $em->getRepository('BctBundle:Tcc_sous_cat')->findByTcc($tccs); // notre query builder vas lister les sous catégories par tcc_principale


        return $this->render('BctBundle:Sous_cat:categories.html.twig',array('tcc_sousCat' =>$tcc_sousCat, // on affiche
                                                                                'm' =>$tcc_principale));
    }
}