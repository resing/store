<?php

namespace Sdz\AccueilBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Site\BackOfficeBundle\Entity\Media;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;


class LoadMediaData extends AbstractFixture implements  ContainerAwareInterface, OrderedFixtureInterface
{
       /**
     * {@inheritDoc}
     */
    private $container;
    public function load(ObjectManager $manager)
    {
        $Media1 = new Media;
        $Media1->setName("Foutas1");
        $Media1->setCreated(new \DateTime('now '));
        $Media1->setUpdated(new \DateTime('now '));
        $Media1->setPath("1.jpg");
        $Media1->setProduct($this->getReference("produit1"));
        $Media1->setThumbProduct('1');
        $manager->persist($Media1);
        $manager->flush();
        
        $Media2 = new Media;
        $Media2->setName("Foutas2");
        $Media2->setCreated(new \DateTime('now '));
        $Media2->setUpdated(new \DateTime('now '));
        $Media2->setPath("2.jpg");
        $Media2->setProduct($this->getReference("produit1"));

        $manager->persist($Media2);
        $manager->flush();
        
        $Media3 = new Media;
        $Media3->setName("Foutas3");
        $Media3->setCreated(new \DateTime('now '));
        $Media3->setUpdated(new \DateTime('now '));
        $Media3->setPath("6.jpg");
        $Media3->setProduct($this->getReference("produit1"));
        $manager->persist($Media3);
        $manager->flush();
        
        $Media6 = new Media;
        $Media6->setName("Foutas2");
        $Media6->setCreated(new \DateTime('now '));
        $Media6->setUpdated(new \DateTime('now '));
        $Media6->setPath("91.jpg");
        $Media6->setThumbProduct('1');
        $Media6->setProduct($this->getReference("produit2"));

        $manager->persist($Media6);
        $manager->flush();
        
        $Media4 = new Media;
        $Media4->setName("Foutas4");
        $Media4->setCreated(new \DateTime('now '));
        $Media4->setUpdated(new \DateTime('now '));
        $Media4->setPath("90.jpg");
        $Media4->setProduct($this->getReference("produit2"));

        $manager->persist($Media4);
        $manager->flush();
        
        $Media5 = new Media;
        $Media5->setName("Foutas2");
        $Media5->setCreated(new \DateTime('now '));
        $Media5->setUpdated(new \DateTime('now '));
        $Media5->setPath("93.jpg");
        $Media5->setProduct($this->getReference("produit2"));

        $manager->persist($Media5);
        $manager->flush();
        
    }
        public  function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    public function getOrder() 
    {
        return 4;
    }
}
    