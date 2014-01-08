<?php

namespace Fluzo\ContactBundle\Controller;

use Fluzo\ContactBundle\Entity\Contact;
use Fluzo\ContactBundle\Form\Type\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $locale = $this->getRequest()->getLocale();
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);

        $form->handleRequest($request);

        if ($form->isValid())
        {
            $data = $form->getData();

            $message = \Swift_Message::newInstance()
                    ->setSubject($data->getSubject())
                    ->setFrom('fluzo.info@gmail.com')
                    ->setTo('fluzo.info@gmail.com')
                    ->setBody($data->getName().'<br />'.$data->getEmail().'<br >'.$data->getMessage(),'text/html'
                    /* $this->renderView('HelloBundle:Hello:email.txt.twig', array('name' => $name)) */
            );
            $this->get('mailer')->send($message);

            return $this->redirect($this->generateUrl('fluzo_contact_submit'));
        }

        return $this->render('FluzoContactBundle:Default:index.html.twig', array('form' => $form->createView(), 'locale' => $locale));
    }

    public function submitAction()
    {
        return $this->render('FluzoContactBundle:Default:submit.html.twig');
    }

}
