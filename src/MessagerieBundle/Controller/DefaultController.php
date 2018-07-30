<?php

namespace MessagerieBundle\Controller;

use MessagerieBundle\Entity\Messagerie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Messagerie/Default/index.html.twig');
    }

    public function messageAction(){
        $role = $this->getUser()->getRoles()[0];

        print_r($this->getUser()->getId());

        if($role == "ROLE_SUPER_ADMIN " || $role == "ROLE_ADMIN "){
            return $this->render('@Messagerie/Default/messagesAdmin.html.twig');
        } else {
            return $this->render('@Messagerie/Default/messages.html.twig');
        }



    }

    public function responseAction(){

    }

    public function newAction(Request $request)
    {

        print_r($this->getUser()->getRoles()[0]);

        $message = new Messagerie();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $message);

        $formBuilder
            ->add('user', TextType::class)
            ->add('destinataire', TextType::class)
            ->add('sujet', TextType::class)
            ->add('corps',TextareaType::class)
            ->add('save', SubmitType::class)
        ;

        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // On persiste $patient
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
        }


        return $this->render('@Messagerie/Default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
