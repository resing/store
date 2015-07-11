<?php

namespace Site\UtilisateursBundle\Controller;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DefaultController extends Bundle
{
   public function getParent()
    {
       
        return 'FOSUserBundle';
    }
    
}
