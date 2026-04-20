<?php

namespace App\Form;

use App\Entity\ReservationTransport;
use App\Entity\Transport;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationTransportType extends AbstractType
{
    private $userRepo;

    public function __construct(\App\Repository\UtilisateurRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('transport', EntityType::class, [
                'class' => Transport::class,
                'choice_label' => function (Transport $transport) {
                    return $transport->getTypeTransport() . ' - ' . $transport->getVilleDepart() . ' -> ' . $transport->getVilleArrivee();
                },
                'label' => 'Transport',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('dateReservation', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date Réservation',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('nbPlacesReservees', IntegerType::class, [
                'label' => 'Voyageurs (Places)',
                'attr' => ['class' => 'form-control'],
            ]);

        if (isset($options['user_role']) && $options['user_role'] === 'ADMIN') {
            $users = $this->userRepo->findAll();
            $userChoices = [];
            foreach ($users as $user) {
                $userChoices[$user->getNom()] = $user->getId();
            }

            // In edit mode, disable the idUser field so it cannot be changed
            $isEdit = isset($options['is_edit']) && $options['is_edit'] === true;

            $builder
                ->add('idUser', ChoiceType::class, [
                    'choices' => $userChoices,
                    'label' => 'Client',
                    'attr' => ['class' => 'form-control'],
                    'disabled' => $isEdit, // Disable in edit mode
                ])
                ->add('statut', ChoiceType::class, [
                    'choices'  => [
                        'En attente' => 'EN_ATTENTE',
                        'Confirmée' => 'CONFIRMEE',
                        'Annulée' => 'ANNULEE',
                        'Terminée' => 'TERMINEE',
                    ],
                    'label' => 'Statut',
                    'attr' => ['class' => 'form-control'],
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationTransport::class,
            'user_role' => 'ADMIN',
            'is_edit' => false,
        ]);
    }
}
