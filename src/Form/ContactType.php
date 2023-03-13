<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50'
            ],
            'label' => 'Nom', 
            'required' => true,
            'label_attr' => [
                'class' => 'form-label mt-4'
            ],
            'constraints' => [
                new Assert\Length(['min' => 2, 'minMessage' => "Le nom doit faire plus de 2 caractères"]),
                new Assert\NotBlank(['message' => "Vous devez renseigner ce champs"])]
            ])
        ->add('firstName', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50'
            ],
            'label' => 'Prénom', 
            'required' => true,
            'label_attr' => [
                'class' => 'form-label mt-4'
            ],
            'constraints' => [
                new Assert\Length(['min' => 2, 'minMessage' => "Le nom doit faire plus de 2 caractères"]),
                new Assert\NotBlank(['message' => "Vous devez renseigner ce champs"])]
            ])
        ->add('dateOfBirth', DateType::class, [
            'widget' => 'single_text',
            'attr' => [
                'class' => 'form-control'
            ],
            'label' => 'Date de naissance', 
            'required' => true,
            'label_attr' => [
                'class' => 'form-label mt-4'
            ],
            'constraints' => [
                new Assert\NotBlank(['message' => "Vous devez renseigner ce champs"])]   
            ])
        ->add('codeName', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50'
            ],
            'label' => 'Nom de code', 
            'required' => true,
            'label_attr' => [
                'class' => 'form-label mt-4'
            ],
            'constraints' => [
                new Assert\Length(['min' => 2, 'minMessage' => "Le nom doit faire plus de 2 caractères"]),
                new Assert\NotBlank(['message' => "Vous devez renseigner ce champs"])]
            ])
        ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary mt-4',
                ],
                'label' => 'Créer une cible'
                
                ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
