<?php

namespace Site\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteBackOfficeBundle:Default:index.html.twig', array('name' => $name));
    }
}
