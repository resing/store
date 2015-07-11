<?php
namespace Site\FrontOfficeBundle\Twig\Extension;
use Doctrine\ORM\EntityManager;


class PriceSoldeExtension extends \Twig_Extension {
    
    public function getFilters() {
        
        return   array(new \Twig_SimpleFilter('pricePromo' , array($this,'priceSpecial'))) ;
    }
    
    public function __construct(EntityManager $entityManager) {
        
       $this->entityManager = $entityManager;
    }
    
     public function priceSpecial($produitPrice,$productId) {
        
        $em     =  $this->entityManager;
        $product = $em->getRepository('SiteBackOfficeBundle:Specials')->findOneByProduct($productId);
        
        if($product)
            return $product->getPrice();
        else {
            return $produitPrice;
        }
        
    }
    
    public function getName() {
        
       return 'pricePromo_extension';
    }
}

?>
