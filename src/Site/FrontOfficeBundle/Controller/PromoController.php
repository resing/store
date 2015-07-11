<?php

namespace Site\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class PromoController extends Controller
{
    public function indexAction()
    {
        $em    = $this->getDoctrine()->getManager();
        $promos = $em->getRepository('SiteBackOfficeBundle:MediaSpecials')->findBy(array('status' =>1));
        return $this->render('SiteFrontOfficeBundle:Default:index.html.twig',array('promos' => $promos));
    }
    
    public function listpromoAction($slug)
    {
        
        $em               = $this->getDoctrine()->getManager();
        $listpromo        = $em->getRepository('SiteBackOfficeBundle:MediaSpecials')->findOneBySlug($slug);
        $listProductPromo = $listpromo->getSpecials();
        return $this->render('SiteFrontOfficeBundle:Default:promoList.html.twig',array('specials' => $listProductPromo));

    }
    
}
