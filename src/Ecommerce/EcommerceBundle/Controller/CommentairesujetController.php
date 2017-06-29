<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Sujet;
use Ecommerce\EcommerceBundle\Entity\Commentairesujet;
use Ecommerce\EcommerceBundle\Form\CommentairesujetType;

/**
 * Commentairesujet controller.
 *
 */
class CommentairesujetController extends Controller
{

    /**
     * Lists all Commentairesujet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceBundle:Commentairesujet')->findAll();

        return $this->render('EcommerceBundle:Commentairesujet:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Commentairesujet entity.
     *
     */
    public function AjouterCommentaireSujetAction(Request $request,$sujet)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcommerceBundle:Sujet')->find($sujet);
        $entities = $em->getRepository('EcommerceBundle:Commentairesujet')->findBySujet($sujet);
        $user = $this->get('security.context')->getToken()->getUser();
        $com = new Commentairesujet();
        $form = $this->createForm(new CommentairesujetType(), $com);
        if($request->isMethod('post')){
           $form->bind($request);
            $com = $form->getData();  
            $em = $this->getDoctrine()->getManager();
            $com->setSujet($entity);
            $com->setUser($user);
            $em->persist($com);
            $em->flush(); 
        return $this->redirect($this->generateUrl('commentairesujet_create', array('sujet'=>$sujet)));}
        return $this->render('EcommerceBundle:Default:Commentairesujet\ajout.html.twig', array(
                    'sujet' => $entity,
                    'entities' => $entities,
                    'utilisateur' => $user,
                    'form' => $form->createView(),
    ));}
    /**
     * Creates a form to create a Commentairesujet entity.
     *
     * @param Commentairesujet $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Commentairesujet $entity)
    {
        $form = $this->createForm(new CommentairesujetType(), $entity, array(
            'action' => $this->generateUrl('commentairesujet_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Commenter'));

        return $form;
    }

    /**
     * Displays a form to create a new Commentairesujet entity.
     *
     */
//    public function newAction()
//    {
//        $entity = new Commentairesujet();
//        $form   = $this->createCreateForm($entity);
//
//        return $this->render('PiDevClientBundle:Commentairesujet:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }

    /**
     * Finds and displays a Commentairesujet entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Commentairesujet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentairesujet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Default:Commentairesujet\show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Commentairesujet entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Commentairesujet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentairesujet entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Default:Commentairesujet\edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Commentairesujet entity.
    *
    * @param Commentairesujet $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Commentairesujet $entity)
    {
        $form = $this->createForm(new CommentairesujetType(), $entity, array(
            'action' => $this->generateUrl('commentairesujet_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Commentairesujet entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Commentairesujet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentairesujet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('commentairesujet_edit', array('id' => $id)));
        }

        return $this->render('EcommerceBundle:Default:Commentairesujet\edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Commentairesujet entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceBundle:Commentairesujet')->findOneById($id);
            $sujet=$entity->getSujet()->getId();
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Commentairesujet entity.');
            }

            $em->remove($entity);
            $em->flush();
        

     return $this->redirect($this->generateUrl('commentairesujet_create', array('sujet'=>$sujet)));       
      
    }

    /**
     * Creates a form to delete a Commentairesujet entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentairesujet_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
