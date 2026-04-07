<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $role = $options['user_role'] ?? 'CLIENT';

        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre de la réclamation',
                'attr'  => [
                    'placeholder' => 'Résumez votre problème en quelques mots',
                    'class'       => 'form-control',
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr'  => [
                    'placeholder' => 'Décrivez votre problème en détail...',
                    'rows'        => 5,
                    'class'       => 'form-control',
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label'    => 'Type',
                'required' => false,
                'choices'  => [
                    'Technique'      => 'Technique',
                    'Service Client' => 'Service Client',
                    'Information'    => 'Information',
                    'Paiement'       => 'Paiement',
                    'Autre'          => 'Autre',
                ],
                'placeholder' => 'Choisir un type',
                'attr'        => ['class' => 'form-control'],
            ]);

        // Only admin and agent can update the status
        if (in_array($role, ['ADMIN', 'AGENT'])) {
            $builder->add('statut', ChoiceType::class, [
                'label'   => 'Statut',
                'choices' => [
                    'En attente' => 'EN_ATTENTE',
                    'En cours'   => 'EN_COURS',
                    'Traitée'    => 'TRAITEE',
                    'Rejetée'    => 'REJETEE',
                ],
                'attr' => ['class' => 'form-control'],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
            'user_role'  => 'CLIENT',
        ]);
    }
}
