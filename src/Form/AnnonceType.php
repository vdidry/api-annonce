<?php

namespace App\Form;

use App\Entity\Annonce;
use App\Entity\Categorie;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'titre',
                TextType::class,
                [
                    'required' => true,
                ]
            )
            ->add(
                'contenu',
                TextareaType::class,
                [
                    'required' => true,
                ]
            )
            ->add(
                'prix',
                NumberType::class,
                [
                    'required' => true,
                ]
            )
            ->add(
                'categorie',
                EntityType::class,
                [
                    'class'    => Categorie::class,
                    'choice_label' => 'id',
                    'required' => true
                ]
            )
            ->add(
                'utilisateur',
                EntityType::class,
                [
                    'class'    => Utilisateur::class,
                    'choice_label' => 'id',
                    'required' => true,
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
            'csrf_protection' => false
        ]);
    }
}
