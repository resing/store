<?php

namespace Sdz\AccueilBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Site\BackOfficeBundle\Entity\MediaSpecials;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;


class LoadMediaSpecialsData extends AbstractFixture implements  ContainerAwareInterface, OrderedFixtureInterface
{
       /**
     * {@inheritDoc}
     */
    private $container;
    public function load(ObjectManager $manager)
    {
        $MediaSpecials = new MediaSpecials;
        $MediaSpecials->setName("TUXEDO");
        $MediaSpecials->setCreated(new \DateTime('now '));
        $MediaSpecials->setUpdated(new \DateTime('now '));
        $MediaSpecials->setExpireDate(new \DateTime('2017-07-08'));
        $MediaSpecials->setDescription("REVIVE YOUR WARDROBE WITH CHIC KNITS");
        $MediaSpecials->setPath("1.jpg");
        $MediaSpecials->setStatus("1");
        
        $this->addReference("MediaSpecials", $MediaSpecials);
        $manager->persist($MediaSpecials);
        $manager->flush();
        
        
        $MediaSpecials2 = new MediaSpecials;
        $MediaSpecials2->setName("NEW ARRIVALS");
        $MediaSpecials2->setCreated(new \DateTime('now '));
        $MediaSpecials2->setUpdated(new \DateTime('now '));
        $MediaSpecials2->setExpireDate(new \DateTime('2017-07-08'));
        $MediaSpecials2->setStatus("1");
        $MediaSpecials2->setDescription("REVIVE YOUR WARDROBE WITH CHIC KNITS");
        $MediaSpecials2->setPath("2.jpg");
        $MediaSpecials2->setStatus("1");

        $manager->persist($MediaSpecials2);
        $manager->flush();
        
        
        
    }
        public  function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    public function getOrder() 
    {
        return 5;
    }
}
    