<?php


namespace Ecommerce\EcommerceBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Form\ProduitsType;

/**
 * Description of CatalogueController
 *
 * @author Rania Heddi
 */
class CatalogueController extends Controller{
    //put your code here
        public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceBundle:Produits')->findAll();
        foreach ($entities as $entities){
            if($entities->getCatalogue==true)
            $produit=$entities;
        var_dump($entities);
        die;
        }
        
        return $this->render('EcommerceBundle:Administration:Catalogue/layout/index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
}
