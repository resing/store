<?php
namespace Site\FrontOfficeBundle\Menu;
use Knp\Menu\FactoryInterface;
use Doctrine\ORM\Entitymanager;

class Builder
{
    private $factory;
    private $em;

    public function __construct(FactoryInterface $factory,
                                Entitymanager $em)
    {
        $this->factory = $factory;
        $this->em = $em;
    }

    public function createMainMenu()
    {
        $menu = $this->factory->createItem('root');

       $menu->addChild(
           'categorie',
           array('label'           => 'Home',
                 'route'           => 'site_front_office_homepage',
                    'listAttributes' => array(
                    'class' => 'color5'
                    ),
               
               )
        );

        // Récupération de la liste des catégories.
        $listeCategories = $this->em->getRepository('SiteBackOfficeBundle:Categories')->findAll();
        
        // Création des sous-menus.
        foreach ($listeCategories as $categorie)
        {
            $menu->addChild(
                'categorie_' . $categorie->getId(), // Identifiant du menu.
                array(
                    'label'           => $categorie->getName(),
                    'route'           => 'site_front_office_product',
                    'routeParameters' => array('slug' => $categorie->getSlug()),
                    'linkAttributes' => array(
                    'class' => 'colors1'
                ),
                'attributes' => array(
                    'class' => 'color5'
                ),
                'options' => array(
                    'class' => 'gris active'
                ))
                
            );
        }
        $menu->setChildrenAttribute('class', 'megamenu skyblue');
        // D'autres menus ensuite...
        return $menu;
    }
}