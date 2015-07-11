<?php

namespace Sdz\AccueilBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Site\BackOfficeBundle\Entity\Specials;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;


class LoadSpecialsData extends AbstractFixture implements  ContainerAwareInterface, OrderedFixtureInterface
{
       /**
     * {@inheritDoc}
     */
    private $container;
    public function load(ObjectManager $manager)
    {
        $special = new Specials;
        $special->setExpireDate(new \DateTime('2015-06-01'));
        $special->setMediaspecial($this->getReference("MediaSpecials"));
        $special->setPrice("30");
        $special->setProduct($this->getReference("produit2"));
        $special->setStatus("1");
        $special->setCreated(new \DateTime('now '));
        $special->setUpdated(new \DateTime('now '));
        $manager->persist($special);
        $manager->flush();
        
        
        
        
    }
        public  function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    public function getOrder() 
    {
        return 7;
    }
}
    