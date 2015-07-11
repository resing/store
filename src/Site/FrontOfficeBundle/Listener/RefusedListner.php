<?php
namespace Site\FrontOfficeBundle\Listener;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityManager;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RefusedListner
 *
 * @author Ahmed
 */
class RefusedListner {
    
    public function __construct(ContainerInterface $container,Session  $session,EntityManager $entityManager) {
        $this->session = $session;
        $this->route   = $container->get('router');
        $this->securityContext = $container->get('security.context');
        $this->entityManager = $entityManager;
        
    }
    
    public function onKernelRequest(GetResponseEvent $event) {
        
        if ($event->getRequest()->attributes->get('_route') ==  'site_confirmeEnd') {
            $em     =  $this->entityManager;
            $panier = $this->session->get('panier');
            $user   = $this->securityContext->getToken()->getUser();
            foreach($panier as $key => $element) {
                $lignecaddie = $em->getRepository('SiteBackOfficeBundle:CustomersBasket')->findby(array('product' => $key,'quantity' => $element,'user' => $user));
                if(!$lignecaddie) {
                    $event->setResponse(new RedirectResponse($this->route->generate('site_confirme')));
                }
                
            }
        }
    }
    //put your code here
}

?>
