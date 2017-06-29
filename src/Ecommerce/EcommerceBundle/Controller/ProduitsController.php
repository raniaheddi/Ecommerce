<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Ecommerce\EcommerceBundle\Form\CommentaireType;
use Ecommerce\EcommerceBundle\Entity\Categories;
use Ecommerce\EcommerceBundle\Entity\Commentaire;
use Symfony\Component\HttpFoundation\Request;

class ProduitsController extends Controller {

    public function catalogueAction() {
        $session = $this->getRequest()->getSession();
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $produit[] = array();
        $entities = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => 1));
        for ($i = 0; $i < count($entities); $i++) {
            if ($entities[$i]->getCatalogue() == true)
                $produit[$i] = $entities[$i];
        }
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else if ($utilisateur != 'anon.') {
            $em = $this->getDoctrine()->getManager();
            $bdPanier = $utilisateur->getPanier();
            $ligneCommandes = $em->getRepository('EcommerceBundle:LigneCommande')->findByPanier($bdPanier->getId());
            if ($ligneCommandes != null) {
                $panier = array();
                foreach ($ligneCommandes as $ligneCommandes) {
                    $panier[$ligneCommandes->getProduit()->getId()] = $ligneCommandes->getQte();
                }
                $session->set('panier', $panier);
            }
        } else
            $panier = false;
        $produit = $this->get('knp_paginator')->paginate($produit, $this->get('request')->query->get('page', 1), 9);

        return $this->render('EcommerceBundle:Default:produits/layout/catalogue.html.twig', array('produits' => $produit,
                    'panier' => $panier));
    }

    public function indexAction() {
        $session = $this->getRequest()->getSession();
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $produit[] = array();
        $findProduits[] = array();
        $catalogue = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => 1));
        for ($i = 0; $i < count($catalogue); $i++) {
            if ($i < 10) {
                $findProduits[$i] = $catalogue[$i];
            }
            if ($catalogue[$i]->getCatalogue() == true)
                $produit[$i] = $catalogue[$i];
        }
        $panier = null;
        if ($session->has('panier')) {
            $panier = $session->get('panier');
        } else if ($utilisateur != 'anon.') {
            $em = $this->getDoctrine()->getManager();
            $bdPanier = $utilisateur->getPanier();
            $ligneCommandes = $em->getRepository('EcommerceBundle:LigneCommande')->findByPanier($bdPanier->getId());
            if ($ligneCommandes != null) {
                $panier = array();
                foreach ($ligneCommandes as $ligneCommandes) {
                    $panier[$ligneCommandes->getProduit()->getId()] = $ligneCommandes->getQte();
                }
                $session->set('panier', $panier);
            }
        } else
            $panier = null;

        $produits = $this->get('knp_paginator')->paginate($findProduits, $this->get('request')->query->get('page', 1), 9);

        return $this->render('EcommerceBundle:Default:produits/layout/home.html.twig', array('produits' => $produits,
                    'panier' => $panier,
                    'catalogue' => $produit));
    }

    public function produitsAction(Categories $categorie = null) {
        $session = $this->getRequest()->getSession();
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $produit[] = array();
        $catalogue = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => 1));
        for ($i = 0; $i < count($catalogue); $i++) {
            if ($catalogue[$i]->getCatalogue() == true)
                $produit[$i] = $catalogue[$i];
        }
        if ($categorie != null)
            $findProduits = $em->getRepository('EcommerceBundle:Produits')->byCategorie($categorie);
        else
            $findProduits = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => 1));

        if ($session->has('panier')) {
            $panier = $session->get('panier');
        } else if ($utilisateur != 'anon.') {
            $em = $this->getDoctrine()->getManager();
            $bdPanier = $utilisateur->getPanier();
            $ligneCommandes = $em->getRepository('EcommerceBundle:LigneCommande')->findByPanier($bdPanier->getId());
            if ($ligneCommandes != null) {
                $panier = array();
                foreach ($ligneCommandes as $ligneCommandes) {
                    $panier[$ligneCommandes->getProduit()->getId()] = $ligneCommandes->getQte();
                }
                $session->set('panier', $panier);
            }
        } else
            $panier = false;

        $produits = $this->get('knp_paginator')->paginate($findProduits, $this->get('request')->query->get('page', 1), 9);

        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits,
                    'panier' => $panier,
                    'catalogue' => $produit));
    }

    public function presentationAction(Request $request, $id) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);
        $entities = $em->getRepository('EcommerceBundle:Commentaire')->findByProduit($id);
        $user = $this->get('security.context')->getToken()->getUser();
        $article = new Commentaire;
        if (!$produit)
            throw $this->createNotFoundException('La page n\'existe pas.');

        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        $form = $this->createForm(new CommentaireType(), $article);
        if ($user != 'anon.') {
            $favoris = $user->getFavoris();
            //comments

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



        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig', array('produit' => $produit,
                    'panier' => $panier,
                    'favoris' => $favoris,
                    'entities' => $entities,
                    'form' => $form->createView(),
                    'utilisateur' => $user));
    }

    public function rechercheAction() {
        $form = $this->createForm(new RechercheType());
        return $this->render('EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }

    public function rechercheTraitementAction() {
        $form = $this->createForm(new RechercheType());

        if ($this->get('request')->getMethod() == 'POST') {
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository('EcommerceBundle:Produits')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }

        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
    }

}
