<?php

namespace App\Form;

use App\Entity\Table;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('klantnaam')
            ->add('btwnummer')
            ->add('adres')
            ->add('plaats')
            ->add('postcode')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Table::class,
        ]);
    }
}
