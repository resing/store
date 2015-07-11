<?php

namespace Sdz\AccueilBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Site\BackOfficeBundle\Entity\ProductDescription;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;


class LoadProductDescriptionData extends AbstractFixture implements  ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;
    public function load(ObjectManager $manager)
    {
        // start creat object media 
        // insert object media 1
        
        // start object Media for produit 
        $produitDescription = new ProductDescription();
        $produitDescription->setCreated(new \DateTime('now '));
        $produitDescription->setDescription("Panier en papier tressé coloré autour d'une structure en métal peinte - Dimensions : 28 x 38 cm (dxh) - Matériaux : métal laqué et papier tressé - Coloris : métal bleu, papier gris et jaune. Détail");
        $produitDescription->setUpdated(new \DateTime('now '));
        $produitDescription->setUrl("http://www.google.com");
        $produitDescription->setViewed("1");
       
        $produitDescription->setName("Panier Marie Fluo Jaune Serax");
        $this->addReference("produitDescription1", $produitDescription);
        $manager->persist($produitDescription);
        $manager->flush();
        
        $produitDescription1 = new ProductDescription();
        $produitDescription1->setCreated(new \DateTime('now '));
        $produitDescription1->setDescription("Lot de 4 chaises noires empilables, entièrement recouvertes de synderme, L.P.H: 46 x 57 x 90 cm (hauteur d'assise: 46cm, profondeur d’assise: 42cm)");
        $produitDescription1->setUpdated(new \DateTime('now '));
        $produitDescription1->setUrl("http://www.google.com");
        $produitDescription1->setViewed("1");
        $produitDescription1->setName("chaises marrons empilables");
        $this->addReference("produitDescription2", $produitDescription1);
        $manager->persist($produitDescription1);
        $manager->flush();
        // insert and end this object
        
        
        
    }
    
        public  function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    public function getOrder() 
    {
        return 2;
    }
    
}