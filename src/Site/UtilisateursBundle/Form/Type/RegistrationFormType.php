<?php

namespace Site\UtilisateursBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of RegistrationFormType
 *
 * @author Ahmed
 */
class RegistrationFormType extends AbstractType {
    
    
    //put your code here
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
 
        // Ajoutez vos champs ici, revoilà notre champ *location* :
        $builder
        ->add('firstname', null, array('label' => 'form.firstname', 'translation_domain' => 'FOSUserBundle'))
            ->add('lastname', null, array('label' => 'form.lastname', 'translation_domain' => 'FOSUserBundle'))
            ->add('sex', 'choice', array(
             'choices' => array('1' => 'Homme', '2' => 'Femme'),
             'expanded' => true,
             'multiple' => false)) ;
    }
 
    public function getName()
    {
        return 'site_utilisateurs_registration';
    }
    
    public function getParent()
    {
        return 'fos_user_registration';
    }
               
     
}
