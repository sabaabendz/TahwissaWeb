<?php
namespace App\Form;

use App\Entity\Destination;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class DestinationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Djerba, Paris...'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom est obligatoire'])
                ]
            ])
            ->add('pays', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Tunisie, France...'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le pays est obligatoire'])
                ]
            ])
            ->add('ville', TextType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Djerbahood']
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 5]
            ])
            ->add('latitude', TextType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: 33.8076']
            ])
            ->add('longitude', TextType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: 10.8451']
            ])
            ->add('imageUrl', UrlType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'https://...']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Destination::class,
        ]);
    }
}