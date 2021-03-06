<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'username',
                null,
                array(
                    'label' => 'user.name',
                )
            )
            ->add(
                'email',
                null,
                array(
                    'label' => 'user.email',
                )
            )
            ->add('password');
    }

}
