<?php 
namespace Site\FrontOfficeBundle\Listener;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RedirectListener
{   
    public function __construct(ContainerInterface $container,Session  $session) {
        $this->session = $session;
        $this->route = $container->get('router');
        $this->securityContext = $container->get('security.context');
                
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        
        if ($event->getRequest()->attributes->get('_route') ==  'site_confirme') {
            if( $this->session->has('panier')) {
                if(count($this->session->get('panier')) == 0) {
                    
                    $event->setResponse(new RedirectResponse($this->route->generate('site_front_office_panier')));
                }
            }
           if(!is_object($this->securityContext->getToken()->getUser()) ) {
           $event->setResponse(new RedirectResponse($this->route->generate('fos_user_registration_register')));
           }
       }
       
       if( $event->getRequest()->attributes->get('_route') ==  'fos_user_registration_register'){
           if(is_object($this->securityContext->getToken()->getUser()) ) {
           $event->setResponse(new RedirectResponse($this->route->generate('site_front_office_panier')));
           }
       }
       
    }
}