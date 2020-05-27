<?php

namespace App\Form;

use App\Entity\Championship;
use App\Entity\Stable;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('stableName')
            ->add('stableFirstColor')
            ->add('stableSecondColor')
            ->add('Championship', EntityType::class, [
                'class' => Championship::class,
                'choice_label' => 'championshipName',
                'required'   => false,
                'empty_data' => 'Choissisez une page',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Stable::class,
        ]);
    }
}
