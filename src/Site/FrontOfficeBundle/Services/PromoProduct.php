<?php

namespace Site\FrontOfficeBundle\Services;
use Doctrine\ORM\EntityManager;

/**
 * Description of PromoProduct
 *
 * @author Ahmed
 */
class PromoProduct {
    public function __construct(EntityManager $entityManager) {
        
       $this->entityManager = $entityManager;
    }
    
    public function getPromoProduct($productId) {
        
        $em     =  $this->entityManager;
        $product = $em->getRepository('SiteBackOfficeBundle:Specials')->findOneByProduct($productId);
        
        if($product)
            return $product->getPrice();
        else {
            return false;
        }
        
    }
}

?>
