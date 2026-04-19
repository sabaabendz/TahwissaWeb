<?php

namespace App\Form;

use App\Entity\Transport;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typeTransport', ChoiceType::class, [
                'choices'  => [
                    'Bus' => 'Bus',
                    'Minibus' => 'Minibus',
                    'Train' => 'Train',
                    'Avion' => 'Avion',
                ],
                'label' => 'Type de transport',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('villeDepart', TextType::class, [
                'label' => 'Ville de départ',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Alger'],
            ])
            ->add('villeArrivee', TextType::class, [
                'label' => 'Ville d\'arrivée',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Oran'],
            ])
            ->add('dateDepart', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de départ',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('heureDepart', TimeType::class, [
                'widget' => 'single_text',
                'label' => 'Heure de départ',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('duree', IntegerType::class, [
                'label' => 'Durée (en heures/minutes)',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: 5'],
            ])
            ->add('prix', MoneyType::class, [
                'currency' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: 2500'],
            ])
            ->add('nbPlaces', IntegerType::class, [
                'label' => 'Capacité (Places)',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: 48'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transport::class,
        ]);
    }
}
