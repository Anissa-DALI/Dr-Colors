<?php

namespace App\Form;

use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
             
        ->add('civilites', ChoiceType::class,[
                'choices' => [
                    'Mme' => 'Mme',
                    'Mlle'=> 'Mlle',
                    'Mr'  => 'Monsieur',]
                    
            ])      
            ->add('nom')
            ->add('prenom')
            ->add('telephone')
            ->add('email', EmailType::class,)
            
            ->add('realisation', ChoiceType::class,[
                'choices' => [
                    'Exterieur' =>  'exterieure',
                    'Interieur' =>  'interieure',
                    'Special'   =>  'speciale',]
                    
            ])      
            ->add('message',  TextareaType::class, [
                
                "attr" => [
                    "placeholder" => "Indiquez le type de réalisation (plus haut). Un devis plus précis et une réponse plus rapide."]              
                 ])
            
            ->add('rgpd', CheckboxType::class,[
            'label'=>'J\'accepte l\'enregistrement de ces données pour l\'objet de ce formulaire'])             
                 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
        ]);
    }
}
