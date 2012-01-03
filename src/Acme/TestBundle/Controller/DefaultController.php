<?php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name, $sex)
    {
        return $this->render('TestBundle:Default:index.html.twig', array('name' => $name, 'sex' => $sex));
    }
}
