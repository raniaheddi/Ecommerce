<?php

namespace Ecommerce\EcommerceBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Commentaire;
use Ecommerce\EcommerceBundle\Form\CommentaireType;

/**
 * Commentaire controller.
 *
 */
class CommentaireController extends Controller
{
    
    /**
     * Creates a form to create a Commentaire entity.
     *
     * @param Commentaire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Commentaire $entity)
    {
        $form = $this->createForm(new CommentaireType(), $entity, array(
            'action' => $this->generateUrl('commentaire_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

   

    /**
     * Displays a form to edit an existing Commentaire entity.
     *
     */
    public function editAction(Request $request,$id)
    {
        
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('EcommerceBundle:Commentaire')->find($id);
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($entity->getProduit()->getId());
        $entities = $em->getRepository('EcommerceBundle:Commentaire')->findByProduit($entity->getProduit()->getId());
        $user = $this->get('security.context')->getToken()->getUser();
        $article = new Commentaire;
        if (!$produit)
            throw $this->createNotFoundException('La page n\'existe pas.');

        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        if ($user != "anon") {
            $favoris = $user->getFavoris();
            //comments
            $form = $this->createForm(new CommentaireType(), $article);
            if ($request->isMethod('post')) {
                $form->bind($request);
                $com = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $com->setProduit($produit);
                $com->setUser($user);
                $em->persist($com);
                $em->flush();
                return $this->redirect($this->generateUrl('presentation', array('id' => $id)));
            }
        } else
            $favoris = null;
         if ($request->isMethod('PUT')) {
             // $form->bind($request);
                $com = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $com->setProduit($produit);
                $com->setUser($user);
                $em->persist($com);
                $em->flush();
              return $this->redirect($this->generateUrl('presentation', array('id' => $entity->getProduit()->getId())));
         }
       

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentaire entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Default:Commentaire\edit.html.twig', array(
                   'produit' => $produit,        
                    'panier' => $panier,
                    'favoris' => $favoris,
                    'entities' => $entities,
                    'form' => $form->createView(),
                    'utilisateur'=>$user,
            'com'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Commentaire entity.
    *
    * @param Commentaire $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Commentaire $entity)
    {
        $form = $this->createForm(new CommentaireType(), $entity, array(
            'action' => $this->generateUrl('commentaire_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Commentaire entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Commentaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('commentaire_edit', array('id' => $id)));
        }

        return $this->render('EcommerceBundle:Default:Commentaire\edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Commentaire entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

     
            $em = $this->getDoctrine()->getManager();
 
            $entity = $em->getRepository('EcommerceBundle:Commentaire')->find($id);
            $produit=$entity->getProduit()->getId();
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Commentaire entity.');
            }

            $em->remove($entity);
            $em->flush();
 return $this->redirect($this->generateUrl('presentation', array('id'=>$produit)));

    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentaire_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
