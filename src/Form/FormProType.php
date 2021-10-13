<?php

namespace App\Form;

use App\Entity\ImageType;
use App\Entity\Professionnels;
use App\Form\ImageType as FormImageType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\ImageValidator;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichImageType;




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
            ->add('telechager_photo', FormImageType::class)
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
