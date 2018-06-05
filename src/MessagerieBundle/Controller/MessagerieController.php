<?php

namespace MessagerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MessagerieController extends Controller
{
    public function indexAction()
    {

        return $this->render('@MessagerieBundle/Messagerie/index.html.twig');
    }
}
