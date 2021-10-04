<?php

namespace App\Form;

use App\Entity\Fans;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('civilites')
            ->add('nom')
            ->add('prenom')
            ->add('telephone')
            ->add('email', EmailType::class)
            ->add('message')
            ->add('lieu')
            ->add('type')
            ->add('date')
            ->add('fonction')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fans::class,
        ]);
    }
}
