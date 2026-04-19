<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre de l\'événement',
                'attr'  => [
                    'placeholder' => 'Ex: Concert Live Jazz',
                    'class'       => 'form-control',
                ],
            ])
            ->add('description', TextareaType::class, [
                'label'    => 'Description',
                'required' => false,
                'attr'     => [
                    'placeholder' => 'Décrivez l\'événement...',
                    'rows'        => 4,
                    'class'       => 'form-control',
                ],
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu',
                'attr'  => [
                    'placeholder' => 'Ex: Carthage Theatre',
                    'class'       => 'form-control',
                ],
            ])
            ->add('categorie', ChoiceType::class, [
                'label'    => 'Catégorie',
                'required' => false,
                'choices'  => [
                    'Musique'      => 'Musique',
                    'Culture'      => 'Culture',
                    'Technologie'  => 'Technologie',
                    'Sport'        => 'Sport',
                    'Art'          => 'Art',
                    'Gastronomie'  => 'Gastronomie',
                    'Cinéma'       => 'Cinéma',
                    'Autre'        => 'Autre',
                ],
                'placeholder' => 'Choisir une catégorie',
                'attr'        => ['class' => 'form-control'],
            ])
            ->add('dateEvent', DateType::class, [
                'label'  => 'Date de l\'événement',
                'widget' => 'single_text',
                'attr'   => ['class' => 'form-control'],
            ])
            ->add('heureEvent', TimeType::class, [
                'label'  => 'Heure de l\'événement',
                'widget' => 'single_text',
                'attr'   => ['class' => 'form-control'],
            ])
            ->add('prix', MoneyType::class, [
                'label'    => 'Prix de base (TND)',
                'currency' => 'TND',
                'help'     => 'Prix catalogue avant réduction. Si une promo est active, le client paie le prix réduit.',
                'attr'     => [
                    'placeholder' => '0.00',
                    'class'       => 'form-control js-evenement-prix-base',
                ],
            ])
            ->add('nbPlaces', IntegerType::class, [
                'label' => 'Nombre de places',
                'attr'  => [
                    'min'         => 1,
                    'placeholder' => 'Ex: 200',
                    'class'       => 'form-control',
                ],
            ])
            ->add('promoPercent', IntegerType::class, [
                'label'    => 'Réduction promo (%)',
                'required' => false,
                'help'     => 'Optionnel. Ex. 15 pour −15 % sur le prix de base. Laisser vide pour aucune promo.',
                'attr'     => [
                    'min'         => 1,
                    'max'         => 100,
                    'placeholder' => 'ex. 10',
                    'class'       => 'form-control js-evenement-promo-pct',
                ],
            ])
            ->add('statut', ChoiceType::class, [
                'label'   => 'Statut',
                'choices' => [
                    'Disponible' => 'DISPONIBLE',
                    'Complet'    => 'COMPLET',
                    'Annulé'     => 'ANNULE',
                ],
                'attr' => ['class' => 'form-control'],
            ]);

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event): void {
            $data = $event->getData();
            if (!\is_array($data)) {
                return;
            }
            if (\array_key_exists('promoPercent', $data) && $data['promoPercent'] === '') {
                $data['promoPercent'] = null;
            }
            $event->setData($data);
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
