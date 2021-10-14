<?php

namespace App\Form;

use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
             
        ->add('civilites', ChoiceType::class,[
            'label'=>'Civilités',    
            'choices' => [
                    'Mme' => 'Mme',
                    'Mlle'=> 'Mlle',
                    'Mr'  => 'Monsieur',]
                         
            ])     
             
            ->add('nom')
            ->add('prenom', null, [
                'label'=>'Prénom'
            ])
            ->add('telephone',null, [
              'label'=>'Téléphone'  
            ])
            ->add('email', EmailType::class,)
            
            ->add('realisation', ChoiceType::class,[
                'label'=>'Réalisation',
                'choices' => [
                    'En Exterieur' =>  'exterieur',
                    'En Interieur' =>  'interieur',
                    'Complexe'     =>  'complexe',]
                    
            ])  
            ->add('ville',TextType::class,[
                "attr" => [
                    "placeholder" => "Indiquer la commune ou la ville de réalisation."] 
            ])    
            ->add('message',  TextareaType::class, [
                
                "attr" => [
                    "placeholder" => "Indiquer le type de réalisation (plus haut) permet un devis plus précis et une réponse rapide."]              
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
