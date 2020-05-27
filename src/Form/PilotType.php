<?php

namespace App\Form;

use App\Entity\Pilot;
use App\Entity\Stable;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PilotType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pilotFirstName')
            ->add('pilotLastName')
            ->add('pilotAge')
            ->add('Stable', EntityType::class, [
                'class' => Stable::class,
                'choice_label' => 'stableName',
                'multiple' => 'true',
                'expanded' => 'true',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pilot::class,
        ]);
    }
}
