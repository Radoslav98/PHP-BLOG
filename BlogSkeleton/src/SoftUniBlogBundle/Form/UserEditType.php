<?php

namespace SoftUniBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserEditType extends UserType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add("roles",ChoiceType::class, [
            'choices'=>[
                'User'=>"ROLE_USER",
                'Admin'=>"ROLE_ADMIN"
            ],
            'expanded'=>true,
            'multiple'=>true
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getName()
    {
        return 'soft_uni_blog_bundle_user_edit_type';
    }
}
