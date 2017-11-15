<?php

namespace BctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefinitionItemsController extends Controller
{
    /**
     * @Route ("{_locale}/definition/items/{id}", name="definition_items")
     */
    public function definitionItemsAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository('BctBundle:Media_items')->findByMi($id);

        if(!$item)// si la sous tcc n'existe pas , la page nexiste pas
        {
            throw $this->createNotFoundException("La page n'existe pas");
        }
        return $this->render('BctBundle:Item:items.html.twig', array('item'=>$item));
    }
}
