<?php

namespace Pumped\PumpedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PumpedPumpedBundle:Default:index.html.twig', array('name' => $name));
    }
}
