<?php

namespace Site\BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantity')
            ->add('priceTn')
            ->add('priceEur')
            ->add('status')
            ->add('category')
            ->add('productDescription' , new ProductDescriptionType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\BackOfficeBundle\Entity\Products'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'site_backofficebundle_products';
    }
}
