<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Ecommerce\EcommerceBundle\Entity\Reclamation;
use Ecommerce\EcommerceBundle\Form\ReclamationType;
use Symfony\Component\HttpFoundation\Request;
use Swift_Message;
/**
 * Reclamation controller.
 *
 */
class ReclamationController extends Controller {

    /**
     * Lists all Reclamation entities.
     *
     */
    public function indexAction() {
        return $this->render('EcommerceBundle:Default:Reclamation/reclamation.html.twig', array());
    }

    public function newAction() {
        $Reclamation = new Reclamation();
        $form = $this->container->get('form.factory')->create(new ReclamationType(), $Reclamation);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $this->sendReclamationAction('raniaheddi@gmail.com', $Reclamation->getFrom(), $Reclamation->getNom(), $Reclamation->getText());
            }
        }
        return $this->render('EcommerceBundle:Default:Reclamation/new.html.twig', array('form' => $form->createView()));
    }

    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Reclamation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reclamation entity.');
        }

        return $this->render('EcommerceBundle:Default:Reclamation/show.html.twig', array(
                    'entity' => $entity,
        ));
    }

    public function sendReclamationAction(Request $request) {
        $to = "raniaheddi@gmail.com";
        $Reclamation = new Reclamation();
        $form = $this->createForm(new ReclamationType(), $Reclamation);
                $request=$this->get('request');
                $message = Swift_Message::newInstance()
                        ->setSubject($request->get('subject'))
                        ->setFrom($request->get('from'))
                        ->setTo($to)
                        ->setBody($request->get('message'));
                $this->get('mailer')->send($message);
                return $this->render('EcommerceBundle:Default:Reclamation/reclamation.html.twig', array('to' => $to,
                            'from' => $request->get('from'),
                    
                ));
            
        return $this->redirect($this->generateUrl('my_app_mail_form'));
    }

}
