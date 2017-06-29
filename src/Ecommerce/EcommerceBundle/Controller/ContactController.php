<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Ecommerce\EcommerceBundle\Entity\Contact;
use Ecommerce\EcommerceBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Swift_Message;
/**
 * Contact controller.
 *
 */
class ContactController extends Controller {

    /**
     * Lists all Contact entities.
     *
     */
    public function indexAction() {
        return $this->render('EcommerceBundle:Default:Contact\mail.html.twig', array());
    }

    public function newAction() {
        $mail = new Contact();
        $form = $this->container->get('form.factory')->create(new ContactType(), $mail);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $this->sendMailAction('raniaheddi@gmail.com', $mail->getEmail(), $mail->getSujet(), $mail->getMessage()/*, $mail->getNom()*/);
            }
        }
        return $this->render('EcommerceBundle:Default:Contact\new.html.twig', array('form' => $form->createView()));
    }

    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Contact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        }

        return $this->render('EcommerceBundle:Default:Contact\show.html.twig', array(
                    'entity' => $entity,
        ));
    }

    public function sendMailAction(Request $request) {
        $to = "dridi.cirine@gmail.com";
        $mail = new Contact();
        $form = $this->createForm(new ContactType(), $mail);
                $request=$this->get('request');
                $message = Swift_Message::newInstance()
                        ->setSubject($request->get('subject'))
                        ->setFrom($request->get('from'))
                        ->setTo($to)
                        ->setBody($request->get('message'));
                $this->get('mailer')->send($message);
                return $this->render('EcommerceBundle:Default:Contact\mail.html.twig', array('to' => $to,
                            'from' => $request->get('from'),
                    
                ));
            
        return $this->redirect($this->generateUrl('my_app_mail_form'));
    }

}
