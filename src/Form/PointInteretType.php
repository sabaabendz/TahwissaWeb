<?php
namespace App\Form;

use App\Entity\PointInteret;
use App\Entity\Destination;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class PointInteretType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom est obligatoire'])
                ]
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Monument' => 'monument',
                    'Plage' => 'plage',
                    'Musée' => 'musée',
                    'Restaurant' => 'restaurant',
                    'Hôtel' => 'hôtel',
                    'Autre' => 'autre'
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 4]
            ])
            ->add('imageUrl', UrlType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('destination', EntityType::class, [
                'class' => Destination::class,
                'choice_label' => 'nom',
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Sélectionnez une destination'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PointInteret::class,
        ]);
    }
}