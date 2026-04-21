<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\ReservationEvenement;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationEvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $role = $options['user_role'] ?? 'CLIENT';

        $builder
            ->add('evenement', EntityType::class, [
                'class'         => Evenement::class,
                'label'         => 'Événement',
                'placeholder'   => 'Sélectionner un événement',
                'choice_label'  => function (Evenement $e) {
                    $label = $e->getTitre() . ' — ' . $e->getLieu() . ' (' . number_format($e->getPrixFinal(), 2, ',', ' ') . ' TND)';
                    if ($e->hasPromo()) {
                        $label .= ' −' . $e->getPromoPercent() . '%';
                    }

                    return $label;
                },
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('e')
                        ->andWhere('e.statut = :statut')
                        ->setParameter('statut', 'DISPONIBLE')
                        ->orderBy('e.dateEvent', 'ASC');
                },
                'attr' => ['class' => 'form-control'],
            ])
            ->add('dateReservation', DateType::class, [
                'label'  => 'Date de réservation',
                'widget' => 'single_text',
                'attr'   => ['class' => 'form-control'],
            ])
            ->add('nbPlacesReservees', IntegerType::class, [
                'label' => 'Nombre de places',
                'attr'  => [
                    'min'         => 1,
                    'placeholder' => '1',
                    'class'       => 'form-control',
                ],
            ]);

        // Admin and agent can manage status
        if (in_array($role, ['ADMIN', 'AGENT'])) {
            $builder->add('statut', ChoiceType::class, [
                'label'   => 'Statut',
                'choices' => [
                    'En attente' => 'EN_ATTENTE',
                    'Confirmée'  => 'CONFIRMEE',
                    'Annulée'    => 'ANNULEE',
                ],
                'attr' => ['class' => 'form-control'],
            ]);
        }

        // Admin can set user ID manually
        if ($role === 'ADMIN') {
            $builder->add('idUser', IntegerType::class, [
                'label'    => 'ID Utilisateur',
                'required' => false,
                'attr'     => [
                    'class'       => 'form-control',
                    'placeholder' => 'ID de l\'utilisateur',
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationEvenement::class,
            'user_role'  => 'CLIENT',
        ]);
    }
}
