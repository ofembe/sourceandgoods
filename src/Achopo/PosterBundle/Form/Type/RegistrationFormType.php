<?php

namespace Achopo\PosterBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->add('name', null, array('label' => 'form.name', 'translation_domain' => 'PosterBundle'));
        $builder->add('username', null, array('label' => 'form.username', 'translation_domain' => 'PosterBundle'));
        $builder->add('email', 'repeated', array(
                'type' => 'email',
                'options' => array('translation_domain' => 'PosterBundle'),
                'first_options' => array('label' => 'form.email'),
                'second_options' => array('label' => 'form.email_confirmation'),
                'invalid_message' => 'fos_user.email.mismatch',
            ));
        $builder->add('address', null, array('label' => 'form.address', 'translation_domain' => 'PosterBundle'));
        $builder->add('phone', null, array('label' => 'form.phone', 'translation_domain' => 'PosterBundle'));
        
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'achopo_user_registration';
    }
}