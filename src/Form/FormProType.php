<?php

namespace App\Form;

use App\Entity\Professionnels;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormProType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('societe_name')
            ->add('adresse')
            ->add('code_postal')
            ->add('ville')
            ->add('accessibilite')
            ->add('etat_mur')
            ->add('superficie')
            ->add('hauteur_max')
            ->add('telecharger_photo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Professionnels::class,
        ]);
    }
}
