<?php

namespace App\Form;

use App\Entity\Professionnels;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\ImageValidator;


class FormProType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('societe_name', null, [
                'label' => 'Nom de votre société'
            ])
            ->add('adresse')
            ->add('code_postal')
            ->add('ville')
            ->add('accessibilite', null, [
                'label' => 'Indiquer l\'accessibilité du chantier '
            ])
            ->add('etat_mur')
            ->add('superficie')
            ->add('hauteur_max')
            ->add('telecharger_photo', FileType::class, [
                'label' => 'Telecharger photo',

                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer votre demande'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Professionnels::class,
        ]);
    }
}
