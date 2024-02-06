<?php

namespace App\Form;

use App\Entity\AjoutCafe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\Request;

class AjoutCafeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom du café',TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=>
            'fw-bold']])
            ->add('Prix', ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=>
            'fw-bold']])
            ->add('Origine',TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=>
            'fw-bold']])
            ->add('Description',TextareaType::class, ['attr' => ['class'=> 'form-control', 'rows'=>'7', 'cols'=> '7'], 'label_attr' => ['class'=> 'fw-bold']])
            ->add('envoyer',SubmitType::class, ['attr' => ['class'=> 'btn bg-primary text-white m-4' ],'row_attr' => ['class' => 'text-center'],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AjoutCafe::class,
        ]);
    }
}
