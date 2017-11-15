<?php

namespace BctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class Tcc_sousCatController extends Controller
{
    /**
     * @Route ("{_locale}/definition/{id}", name="definition")
     */
    public function definitionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $def = $em->getRepository('BctBundle:Tcc_sous_cat')->find($id); // on va chercher la definition de notre sous categorie
        $illustration = $em->getRepository('BctBundle:Media_items')->findBySS($id); // on va chercher le contenue de nos items



        if(!$def)// si la sous tcc n'existe pas , la page nexiste pas
         {
            throw $this->createNotFoundException("La page n'existe pas");
         }
        
        return $this->render('BctBundle:Sous_cat:definition_sous_cat.html.twig', array('def'=>$def,
                                                                                        
                                                                                        'ill'=>$illustration));
    }

}
