<?php

namespace App\Form;

use App\Form\ImageType;
use App\Entity\Professionnels;
use App\Form\ImageType as FormImageType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\ImageValidator;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Flex\Path;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Validator\Constraints\NotBlank;




class FormProType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('societe_name', null, [
                'label' => 'Nom de votre société',
                'attr' =>   [
                    'placeholder' => 'Votre nom',
                            ],
                'constraints' =>    [
                    new NotBlank    ([
                        'message' => 'Veuillez entrer le nom de votre société',
                                    ]),
                                    ]   ])
                
    
            ->add('adresse', null,  [
                'attr' =>   [
                    'placeholder' => 'Votre adresse',
                            ],
                'constraints' =>    [
                    new NotBlank    ([
                        'message' => 'Veuillez indiquer votre adresse',
                                    ]),  
                                    ]])


            ->add('code_postal',  null, [
                'attr' =>   [
                    'placeholder' => 'Votre code postal',
                            ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez indiquer votre code postal',
                                ]),         
                                ]       ])


            ->add('ville', null, [
                'attr' =>   [
                    'placeholder' => 'Votre ville',
                            ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez indiquer votre ville',
                                ]),             
                                ]])


            ->add('accessibilite', TextareaType::class, [
                'label' => 'Accessibilité du mur ',
                'attr' =>   [
                    'placeholder' => 'Décrivez l\'accessibilité de votre mur',
                            ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez indiquer l\'accessibilité de votre mur',
                                ]),
                                ]  
                                        ])


            ->add('etat_mur', null, [
                'attr' =>   [
                    'placeholder' => 'Décrivez l\'état de votre mur',
                            ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez indiquer l\'état de votre mur',
                                ]),
                                ]   ])


            ->add('superficie' , null, [
                'attr' =>   [
                    'placeholder' => 'Indiquer la superficie de votre mur',
                            ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez indiquer la superficie de votre mur',
                                ]),             
                                ]       ])

            ->add('hauteur_max' , null, [
                'attr' =>   [
                    'placeholder' => 'Inqiquer la hauteur max',
                            ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez indiquer la hauteur max ',
                                ]),               
                                ]       ])


            ->add('telecharger_photo',ImageType::class)


            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer votre demande'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Professionnels::class,
        ]);
    }
}
