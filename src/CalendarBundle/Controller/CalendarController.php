<?php

namespace CalendarBundle\Controller;

use CalendarBundle\Entity\Appointment;
use CalendarBundle\Entity\TypeAppointment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use CalendarBundle\Form\TypeAppointmentType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CalendarController extends Controller
{
    public function indexAction()
    {
//        return $this->render('@Calendar/Default/index.html.twig');
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    public function addAction(Request $request) {
        $appointment = new Appointment();
        $appointment->setIsValidated(false);
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $appointment);
        $formBuilder
            ->add('day', DateType::class, array('label'=>'Jour','widget'=>'single_text','data' => new \DateTime()))
            ->add('hour', TimeType::class, array('label'=>'Heure','with_minutes'=>false))
            ->add('typeAppointment', EntityType::class, array(
                'class' => 'CalendarBundle:TypeAppointment',
                'choice_label' => 'label',
                'multiple' => false,
                'expanded' => true,
                'label' => 'RDV :'
            ))
            ->add('save',SubmitType::class, array('label'=>'Prendre un rdv'))
        ;
        $form = $formBuilder->getForm();
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($appointment);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Votre demande de RDV a été prise en compte.');
                return $this->redirectToRoute('calendar_rdv', array('id' => $appointment->getId()));
            }
        }
        return $this->render('@Calendar/Default/formAdd.html.twig', array(
            'form' => $form->createView(),
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ));
    }
}
