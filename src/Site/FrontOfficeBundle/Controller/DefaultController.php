<?php

namespace Site\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\BackOfficeBundle\Entity\Categories;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Site\FrontOfficeBundle\Form\OrdersType;
use Symfony\Component\Form\FormError;
use Site\BackOfficeBundle\Entity\Orders;
use Site\BackOfficeBundle\Entity\OrdersProducts;
use Site\BackOfficeBundle\Entity\CustomersBasket;

class DefaultController extends Controller
{
    public function indexAction()
    {
        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        $session = $this->getRequest()->getSession();
        return $this->render('SiteFrontOfficeBundle:Default:index.html.twig', array('csrf_token' =>$csrfToken));
    }
    public function getParent()
    {
        return 'FOSUserBundle';
    }
    public function loginAction()
    {
        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        
      return $this->render('SiteFrontOfficeBundle:Default:login.html.twig', array('csrf_token' =>$csrfToken));

    }
    public function productsAction($slug)
    {
        $em          = $this->getDoctrine()->getManager();
         $categories = $em->getRepository('SiteBackOfficeBundle:Categories')->findOneBySlug($slug);
         $products   = $em->getRepository('SiteBackOfficeBundle:Products')->myFind($categories->getId());
         
         // add requet customisation
         // end requet 
       return $this->render('SiteFrontOfficeBundle:Default:products.html.twig',array('products' => $products));
    }
    
        public function detailproductAction($slug)
    {
         $em                 = $this->getDoctrine()->getManager();
         $productDescription = $em->getRepository('SiteBackOfficeBundle:ProductDescription')->findOneBySlug($slug);
         $product            = $em->getRepository('SiteBackOfficeBundle:Products')->findOneByProductDescription($productDescription->getId());
         $promoPrice = $this->container->get('PromoProduct')->getPromoProduct($product->getId());
         
       return $this->render('SiteFrontOfficeBundle:Default:detailProduct.html.twig',array('product' => $product,'pricePromo' => $promoPrice));
    }
    
       public function menuAction()
    {
       $em         = $this->getDoctrine()->getManager();
       $categories = $em->getRepository('SiteBackOfficeBundle:Categories')->findAll();
       return $this->render('SiteFrontOfficeBundle:Default:menu.html.twig',array('categories' => $categories));
    }
    
    public function checkoutAction()
    {
        $session = $this->getRequest()->getSession();
        if(! $session->has("panier")) $session->set ("panier", array());
        $em      = $this->getDoctrine()->getManager();
        
        $products    = $em->getRepository('SiteBackOfficeBundle:Products')->findArray(array_keys($session->get("panier")));
        $panier = $session->get("panier");
        $nombre = 0;
        foreach(  $session->get('panier') as $quantity) {
            
            $nombre = $quantity + $nombre;
        }
        $somme = 0;
        foreach ( $products as $product) {
            $promoPrice = $this->container->get('PromoProduct')->getPromoProduct($product->getId());
            if($promoPrice) {
                
                $somme = ($promoPrice* $panier[$product->getId()]) + $somme;
            } else {
                $somme = ($product->getPriceTn()* $panier[$product->getId()]) + $somme;
            }
        }
        
        return $this->render('SiteFrontOfficeBundle:Default:checkout.html.twig',array('products' => $products,
                                                                                      'panier'   => $session->get("panier"),
                                                                                      'somme'    => $somme, 'nombre' => $nombre));
    }
    
    public function addAction($id)
    {
        $session = $this->getRequest()->getSession();
        if(! $session->has("panier")) $session->set ("panier", array());
        $panier = $session->get("panier");
        
        
        if(array_key_exists($id, $panier)){
            if($this->getRequest()->query->get("qte") != NULL ) $panier[$id] = $this->getRequest()->query->get("qte");
        } else {
              if($this->getRequest()->query->get("qte") != NULL )
                   $panier[$id] = $this->getRequest()->query->get("qte");
                   else 
                       $panier = $panier[$id];
        }
        $session->set('panier', $panier);
        $response = $this->forward('SiteFrontOfficeBundle:Default:ajax');
         return $response;
       // return $this->redirect($this->generateUrl("site_front_office_panier"));

    }
    public function ajouterAction($id)
    {
        $session = $this->getRequest()->getSession();
        if(! $session->has("panier")) $session->set ("panier", array());
        $panier = $session->get("panier");
        
        
        if(array_key_exists($id, $panier)){
            if($this->getRequest()->query->get("qte") != NULL ) $panier[$id] = $this->getRequest()->query->get("qte");
        } else {
              if($this->getRequest()->query->get("qte") != NULL )
                   $panier[$id] = $this->getRequest()->query->get("qte");
                   else 
                       $panier = $panier[$id];
        }
        $session->set('panier', $panier);
        return $this->redirect($this->generateUrl("site_front_office_panier"));

    }
    
    public function ajaxAction()
    {
        $session = $this->getRequest()->getSession();
        if(! $session->has("panier")) $session->set ("panier", array());
        $em      = $this->getDoctrine()->getManager();
        $products    = $em->getRepository('SiteBackOfficeBundle:Products')->findArray(array_keys($session->get("panier")));
        $nombre = 0;
        foreach(  $session->get('panier') as $quantity) {
            
            $nombre = $quantity + $nombre;
        }
        $somme = 0;
        $panier = $session->get('panier');
        foreach ( $products as $product) {
            $promoPrice = $this->container->get('PromoProduct')->getPromoProduct($product->getId());
            if($promoPrice) {
                
                $somme = ($promoPrice* $panier[$product->getId()]) + $somme;
            } else {
                $somme = ($product->getPriceTn()* $panier[$product->getId()]) + $somme;
            }
        }
        $message      = array("somme" => $somme,"nombre" => $nombre);
        return new JsonResponse($message);
    }
    public function caddieAction()
    {
        $session = $this->getRequest()->getSession();
        if(! $session->has("panier")) $session->set ("panier", array());
        $em      = $this->getDoctrine()->getManager();
        $nombre = 0;
        foreach(  $session->get('panier') as $quantity) {
            
            $nombre = $quantity + $nombre;
        }
        $products    = $em->getRepository('SiteBackOfficeBundle:Products')->findArray(array_keys($session->get("panier")));
        $somme = 0;
        $panier = $session->get('panier');
        foreach ( $products as $product) {
            $promoPrice = $this->container->get('PromoProduct')->getPromoProduct($product->getId());
            if($promoPrice) {
                
                $somme = ($promoPrice* $panier[$product->getId()]) + $somme;
            } else {
                $somme = ($product->getPriceTn()* $panier[$product->getId()]) + $somme;
            }
        }
       
        return $this->render('SiteFrontOfficeBundle:Default:panier.html.twig',array('somme' => $somme,
                                                                                       'nombre' => $nombre ));
    }
    
    
    public function deleteAction($id)
    {
        $session = $this->getRequest()->getSession();
        $panier = $session->get("panier");
        if(array_key_exists($id, $panier))
        {
            unset ($panier[$id]);
            $session->set('panier', $panier);
        }
        return $this->redirect($this->getRequest()->headers->get('referer'));
    }
    
    public function customerAction()
    {
        return $this->render('SiteFrontOfficeBundle:Default:register.html.twig');
    }
    
    public function confirmationAction(Request $request)
    {
        $entity       = new Orders();
        
        $form   = $this->createForm(new OrdersType(),$entity);
        $form->bind($request);
        $em       = $this->getDoctrine()->getManager();
        $session  = $this->getRequest()->getSession();
        $products = $em->getRepository('SiteBackOfficeBundle:Products')->findArray(array_keys($session->get("panier")));
        $somme    = 0;
        $panier   = $session->get('panier');
        foreach ( $products as $product) {
            
            
            $somme = ($product->getPriceTn()* $panier[$product->getId()]) + $somme;
        }
        if ($form->isValid())
           {
               
               $user = $this->container->get('security.context')->getToken()->getUser();
               $entity->setUser($user);
               $em   = $this->getDoctrine()->getManager();
               $em->persist($entity);
               $em->flush();
               foreach( $panier as $key => $element) {
                   // add to orders products
                   $orderProduct = new OrdersProducts();
                   $productUnit    = $em->getRepository('SiteBackOfficeBundle:Products')->find($key);
                   $orderProduct->setProduct($productUnit);
                   $orderProduct ->setQuantity($element);
                   $orderProduct->setOrder($entity);
                   $em->persist($orderProduct);
                   $em->flush();
                   // end orders product
                   // start add to basket
                   $customerBasket = new CustomersBasket();
                   $customerBasket->setProduct($productUnit);
                   $customerBasket->setQuantity($element);
                   $customerBasket->setFinalPrice($productUnit->getPriceTn());
                   $customerBasket->setUser($user);
                   $em->persist($customerBasket);
                   $em->flush();
               }
               return $this->redirect($this->generateUrl("site_confirmeEnd"));
           }
        return $this->render('SiteFrontOfficeBundle:Default:confirmation.html.twig',array('form' => $form->createView(),'products' => $products,'somme' => $somme));
    }
    
    public function conftwoAction()
    {
        $em       = $this->getDoctrine()->getManager();
        $session  = $this->getRequest()->getSession();
        $user     = $this->container->get('security.context')->getToken()->getUser();
        $order    = $em->getRepository('SiteBackOfficeBundle:Orders')->findOneBy(array('user' =>$user) ,array('id' => 'desc'));
        $products = $em->getRepository('SiteBackOfficeBundle:Products')->findArray(array_keys($session->get("panier")));
        $somme    = 0;
        $panier   = $session->get('panier');
        foreach ( $products as $product) {
            $somme = ($product->getPriceTn()* $panier[$product->getId()]) + $somme;
        }
        $baskets    = $em->getRepository('SiteBackOfficeBundle:CustomersBasket')->findBy(array('user' =>$user));
        foreach($baskets as  $basket) {
            $em->remove($basket);
            $em->flush();
        }
        
        return $this->render('SiteFrontOfficeBundle:Default:confirmation2.html.twig',array('products' => $products,'somme' => $somme,'order' => $order));
    }
}
