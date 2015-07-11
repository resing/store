<?php

namespace Site\BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SpecialsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('price')
            ->add('expireDate')
            ->add('status')
            ->add('created')
            ->add('updated')
            ->add('mediaspecial')
            ->add('product')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\BackOfficeBundle\Entity\Specials'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'site_backofficebundle_specials';
    }
}
