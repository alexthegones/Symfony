<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', null, [
                'attr' => [
                    'placeholder' => "Saisir votre adresse mail.."
                ]
            ])
            ->add('username', null, [
                'attr' => [
                    'placeholder' => "Saisir un identifiant.."
                ]
            ])
            ->add('password', PasswordType::class, [
                'attr' => [
                    'placeholder' => "Saisir un mot de passe.."
                ]
            ])
            ->add('confirm_password', PasswordType::class, [
                'attr' => [
                    'placeholder' => "Confirmer votre mot de passe.."
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
