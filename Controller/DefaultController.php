<?php

namespace Valiknet\TogglBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TogglBundle:Default:index.html.twig');
    }
}
