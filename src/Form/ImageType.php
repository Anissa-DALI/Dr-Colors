<?php

namespace App\Form;

use App\Repository\ImageTypeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Vich\UploaderBundle\Form\Type\VichImageType;


class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('telecharger_photo', VichImageType::class, [
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
    ]);

    }
}