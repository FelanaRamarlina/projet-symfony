<?php

namespace DocumentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DocumentsBundle:Default:index.html.twig');
    }
}
