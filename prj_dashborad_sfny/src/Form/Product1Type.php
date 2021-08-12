<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class Product1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Nom'])
            ->add('ref', TextType::class, ['label' => 'Référence'])
            ->add('type', TextType::class, ['label' => 'Catégorie'])
            ->add('place', TextType::class, ['label' => "Lieu d'achat"])
            ->add('date_buy', DateType::class, ['label' => "Date d'achat",
												'format' => 'ddMMyyyy'])
            ->add('date_end', DateType::class, ['label' => "Fin garantie",
												'format' => 'ddMMyyyy'])
            ->add('price', IntegerType::class, ['label' => 'Prix'])
            ->add('advices', TextareaType::class, ['label' => "Conseil(s)"])
            ->add('picture', TextType::class, ['label' => 'Image ticket'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
