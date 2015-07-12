<?php

namespace Sdz\AccueilBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Site\BackOfficeBundle\Entity\Products;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;


class LoadProductsData extends AbstractFixture implements  ContainerAwareInterface, OrderedFixtureInterface
{
       /**
     * {@inheritDoc}
     */
    private $container;
    public function load(ObjectManager $manager)
    {
        $produit = new Products;
        $produit->setCategory($this->getReference("category3"));
        $produit->setCreated(new \DateTime('now '));
        $produit->setPriceEur("30");
        $produit->setPriceTn("40");
        $produit->setQuantity("4");
        $produit->setStatus(true);
        $produit->setUpdated(new \DateTime('now '));
        $produit->setProductDescription($this->getReference("produitDescription1"));
        $this->addReference("produit1", $produit);

        $manager->persist($produit);
        $manager->flush();
        
        
        $produit1 = new Products;
        $produit1->setCategory($this->getReference("category3"));
        $produit1->setCreated(new \DateTime('now '));
        $produit1->setPriceEur("60");
        $produit1->setPriceTn("20");
        $produit1->setQuantity("4");
        $produit1->setStatus(true);
        $produit1->setUpdated(new \DateTime('now '));
        $produit1->setProductDescription($this->getReference("produitDescription2"));
        $this->addReference("produit2", $produit1);
        $manager->persist($produit1);
        $manager->flush();
        
        
        
        
    }
        public  function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    public function getOrder() 
    {
        return 3;
    }
}
    