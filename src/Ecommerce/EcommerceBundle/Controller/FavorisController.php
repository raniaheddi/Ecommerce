<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Entity\Favoris;
use Ecommerce\EcommerceBundle\Form\FavorisType;

/**
 * Favoris controller.
 *
 */
class FavorisController extends Controller {

    /**
     * Lists all Favoris entities.
     *
     */
    public function menuAction() {

        $entity = $this->get('security.context')->getToken()->getUser();
        $favoris = $entity->getFavoris();
        return $this->render('EcommerceBundle:Default:Favoris/modulesUsed/favoris.html.twig', array('favoris' => $favoris));
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceBundle:Favoris')->findAll();

        return $this->render('EcommerceBundle:Default\Favoris:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Favoris entity.
     *
     */
    public function createAction(Request $request, $id, $produit) {

        $em = $this->getDoctrine()->getManager();
        $entity = $this->get('security.context')->getToken()->getUser();
        $favoris = $entity->getFavoris();
        //  $favoris= $em->getRepository('EcommerceEcommerceBundle:Favoris')->findOneById(39);

        $produit = $em->getRepository('EcommerceBundle:Produits')->findOneById($produit);
        //  $entity = $this->get('security.context')->getToken()->getUser();
        //  $form = $this->createForm(new FavorisType(),$favoris);
        //  $request = $this->getRequest();
        //  if($request->isMethod('post')){
        //  $form->bind($request);
        //  if ($form->isValid()) {
        //  $favoris = $form->getData(); 
        $produits = $favoris->getProduits();
        foreach ($produits as $produits) {
            if ($produits->getId() == $produit->getId())
                $favoris->removeProduit($produit);
        }

        $favoris->addProduit($produit);
        $em->persist($favoris);
        $em->flush();


        return $this->redirect($this->generateUrl('favoris_show', array('id' => $id,
                            'entity' => $entity,
        )));



        return $this->render('EcommerceBundle:Default\Favoris:new.html.twig', array(
                    'entity' => $entity,
                    'favoris' => $favoris,
                    'produit' => $produit,
        ));
    }

    public function removeAction(Request $request, $id, $produit) {

        $em = $this->getDoctrine()->getManager();
        $entity = $this->get('security.context')->getToken()->getUser();
        $favoris = $entity->getFavoris();
        //  $favoris= $em->getRepository('EcommerceEcommerceBundle:Favoris')->findOneById(39);

        $produit = $em->getRepository('EcommerceBundle:Produits')->findOneById($produit);
        //  $entity = $this->get('security.context')->getToken()->getUser();
        //  $form = $this->createForm(new FavorisType(),$favoris);
        //  $request = $this->getRequest();
        //  if($request->isMethod('post')){
        //  $form->bind($request);
        //  if ($form->isValid()) {
        //  $favoris = $form->getData();  

        $favoris->removeProduit($produit);
        $em->persist($favoris);
        $em->flush();


        return $this->redirect($this->generateUrl('favoris_show', array('id' => $id)));



        return $this->render('EcommerceBundle:Default\Favoris:new.html.twig', array(
                    'entity' => $entity,
                    'favoris' => $favoris,
                    'produit' => $produit,
        ));
    }

    /**
     * Creates a form to create a Favoris entity.
     *
     * @param Favoris $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Favoris $entity) {
        $form = $this->createForm(new FavorisType(), $entity, array(
            'action' => $this->generateUrl('favoris_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Commenter'));

        return $form;
    }

    /**
     * Displays a form to create a new Favoris entity.
     *
     */
    public function newAction() {
        $entity = new Favoris();
        $form = $this->createCreateForm($entity);

        return $this->render('EcommerceBundle:Default\Favoris:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Favoris entity.
     *
     */
    public function showAction($id) {

        $em = $this->getDoctrine()->getManager();
        $entity = $this->get('security.context')->getToken()->getUser();

        $favoris = $entity->getFavoris();
        $produits = $favoris->getProduits();



        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prestataire entity.');
        }



        return $this->render('EcommerceBundle:Default\Favoris:show.html.twig', array(
                    'entity' => $entity,
                    'favoris' => $favoris,
                    'produits' => $produits,
        ));
    }

    /**
     * Displays a form to edit an existing Favoris entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceEcommerceBundle:Favoris')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Favoris entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Default\Favoris:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Favoris entity.
     *
     * @param Favoris $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Favoris $entity) {
        $form = $this->createForm(new FavorisType(), $entity, array(
            'action' => $this->generateUrl('favoris_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }

    /**
     * Edits an existing Favoris entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Favoris')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Favoris entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('favoris_edit', array('id' => $id)));
        }

        return $this->render('EcommerceBundle:Default\Favoris:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Favoris entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceBundle:Favoris')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Favoris entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('favoris'));
    }

    /**
     * Creates a form to delete a Favoris entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('favoris_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Supprimer'))
                        ->getForm()
        ;
    }

}
