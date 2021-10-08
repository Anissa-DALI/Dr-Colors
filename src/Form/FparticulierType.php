<?php

namespace App\Form;

use App\Entity\Particulier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FparticulierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('Civilites', ChoiceType::class,[
                'choices' => [
                    'Mme' => 2,
                    'Mlle'=> 1,
                    'Mr'  => 3,]
                    
            ])      
            ->add('Nom')
            ->add('Prenom')
            ->add('Telephone')
            ->add('Email', EmailType::class)
            ->add('Realisation', ChoiceType::class,[
                'choices' => [
                    'Exterieur' => 1,
                    'Interieur' => 2,
                    'Spécial' => 3,]
                    
            ])
            
            ->add('message',  CKEditorType::class, [
                
                "attr" => [
                    "placeholder" => "Des précisions sur les contraintes de l'emplacement, les élements de taille, de superficie, etc. Un devis plus précis et une réponse plus rapide."]              
                 ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Particulier::class,
        ]);
    }
}
