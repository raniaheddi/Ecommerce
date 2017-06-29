<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Commentairesujet;
use Ecommerce\EcommerceBundle\Form\CommentairesujetType;
use Ecommerce\EcommerceBundle\Entity\Sujet;
use Ecommerce\EcommerceBundle\Form\SujetType;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Sujet controller.
 *
 */
class SujetController extends Controller {

    /**
     * Lists all Sujet entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceBundle:Sujet')->findAll();

        return $this->render('EcommerceBundle:Default:Sujet/index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function showAllAction(Request $request) {
        $i = 0;
        $em1 = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM EcommerceBundle:Sujet a";
        $query = $em1->createQuery($dql);
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 3/* limit per page */
        );
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcommerceBundle:Sujet')->findAll();
        $comm = $em->getRepository('EcommerceBundle:Commentairesujet')->findAll();

        return $this->render('EcommerceBundle:Default:Sujet/showAll.html.twig', array(
                    'entity' => $entity,
                    'com' => $comm,
                    'pagination' => $pagination
                    , 'nb' => $i
        ));
    }

    /**
     * Creates a new Sujet entity.
     *
     */
    public function createAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        $entity = new Sujet();

        $form = $this->createForm(new SujetForm(), $entity);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $stream = fopen($entity->getFile(), 'rb');
            $entity->setImg(stream_get_contents($stream));
            $entity->setUser($user);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('detail_sujet', array('sujet' => $entity->getId())));
        }

        return $this->render('EcommerceBundle:Default:Sujet/new.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Sujet entity.
     *
     * @param Sujet $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Sujet $entity) {
        $form = $this->createForm(new SujetType(), $entity, array(
            'action' => $this->generateUrl('sujet_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Finds and displays a Sujet entity.
     *
     */
//    public function showAction($id) {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('PiDevClientBundle:Sujet')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Sujet entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
//
//        return $this->render('PiDevClientBundle:Sujet:affiche.html.twig', array(
//                    'entity' => $entity,
//                    'delete_form' => $deleteForm->createView(),
//        ));
//    }

    /**
     * Displays a form to edit an existing Sujet entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Sujet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sujet entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Default:Sujet/edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Sujet entity.
     *
     * @param Sujet $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Sujet $entity) {
        $form = $this->createForm(new SujetType(), $entity, array(
            'action' => $this->generateUrl('sujet_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }

    /**
     * Edits an existing Sujet entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Sujet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sujet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sujet_edit', array('id' => $id)));
        }

        return $this->render('EcommerceBundle:Default:Sujet/edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Sujet entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceBundle:Sujet')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sujet entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sujet'));
    }

    /**
     * Creates a form to delete a Sujet entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('sujet_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Supprimer'))
                        ->getForm()
        ;
    }

    public function DetailSujetAction(Request $request, $sujet) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcommerceBundle:Sujet')->find($sujet);
        $entities = $em->getRepository('EcommerceBundle:Commentairesujet')->findBySujet($sujet);
        $user = $this->get('security.context')->getToken()->getUser();

        $com = new Commentairesujet();

        $form = $this->createForm(new CommentairesujetType(), $com);
        if ($request->isMethod('post')) {
            $form->bind($request);
            $com = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $com->setSujet($entity);
            $com->setUser($user);
            $em->persist($com);
            $em->flush();

            return $this->redirect($this->generateUrl('detail_sujet', array('sujet' => $sujet)));
        }
        return $this->render('EcommerceBundle:Default:Sujet/Detail.html.twig', array(
                    'sujet' => $entity,
                    'entities' => $entities,
                    'utilisateur' => $user,
                    'form' => $form->createView(),
        ));
    }

    public function AfficheImageAction($id) {
        $em = $this->getDoctrine()->getManager();

        $image_obj = $em->getRepository('EcommerceBundle:Sujet')->find($id);

        $photo = $image_obj->getImg();

        $response = new StreamedResponse(function () use ($photo) {

            echo stream_get_contents($photo);
        });

        $response->headers->set('Content-Type', 'image/jpeg');

        return $response;
    }

}
