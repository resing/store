<?php

namespace Sdz\AccueilBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Site\BackOfficeBundle\Entity\Categories;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;


class LoadCategoryData extends AbstractFixture implements  ContainerAwareInterface, OrderedFixtureInterface
{
       /**
     * {@inheritDoc}
     */
    private $container;
    public function load(ObjectManager $manager)
    {
        $category1 = new Categories;
        $category1->setName("DECORATION");
        $category1->setCreated(new \DateTime('now '));
        $category1->setUpdated(new \DateTime('now '));
        $this->addReference("category1", $category1);
        $manager->persist($category1);
        $manager->flush();
        
        $category2 = new Categories;
        $category2->setName("TABLEAUX");
        $category2->setCreated(new \DateTime('now '));
        $category2->setUpdated(new \DateTime('now '));
        $this->addReference("category2", $category2);

        $manager->persist($category2);
        $manager->flush();
        
        $category3 = new Categories;
        $category3->setName("BOUGEOIRS");
        $category3->setCreated(new \DateTime('now '));
        $category3->setUpdated(new \DateTime('now '));
        $this->addReference("category3", $category3);
        $manager->persist($category3);
        $manager->flush();
        
        $category4 = new Categories;
        $category4->setName("MAISON");
        $category4->setCreated(new \DateTime('now '));
        $category4->setUpdated(new \DateTime('now '));
        $this->addReference("category4", $category4);
        $manager->persist($category4);
        $manager->flush();
        
        
    }
        public  function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    public function getOrder() 
    {
        return 1;
    }
}
    