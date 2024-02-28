<?php

namespace App\Form;

use App\Entity\Clients;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\EqualTo;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType2 extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('preference_creneau', TextareaType::class, [
                'mapped' => false,
                'required' => true,
                'label' => false,
                'attr' => ['class' => "input_form_inscription2",  'placeholder' => 'Décrivez-vous brièvement votre besoin. Veillez à précisez vos préférences de dates et la localisation de votre site']
            ])
            /*->add('formule_id', ChoiceType::class, [
                'mapped' => false,
                'required' => true,
                'label' => false,
                'attr' => ['class' => "input_form_inscription"],
                'choices' => [
                    'Sélectionner une option' => null, // Option vide avec le placeholder
                    'PHOTOS360' => 0,
                    'EVENT360' => 1,
                    'PUB360' => 2,
                ],
                'placeholder' => 'Sélectionner une formule'
            ])*/
            /*->add('adresse_rdv', TextType::class, [
                'mapped' => false,
                'required' => true,
                'label' => false,
                'attr' => ['class' => "input_form_inscription",  'placeholder' => 'Adresse de rendez-vous']
            ])
            ->add('preference_contact', ChoiceType::class, [
                'mapped' => false,
                'required' => true,
                'label' => false,
                'attr' => ['class' => "input_form_inscription"],
                'choices' => [
                    'Mail' => 'email',
                    'Appel téléphonique' => 'appel téléphonique',
                ]
            ])
*/
            ////->add('email', EmailType::class, ['attr' => ['class' => "input_form_inscription",  'placeholder' => 'Adresse mail'], 'label' => false])////
            //->add('adresse_facturation', TextType::class, ['attr' => ['class' => "input_form_inscription",  'placeholder' => 'Adresse postale de facturation'], 'label' => false])
            ////->add('nom', TextType::class, ['attr' => ['class' => "input_form_inscription",  'placeholder' => 'Nom de votre société'], 'label' => false])
            ////->add('numero_telephone', TextType::class, ['attr' => ['class' => "input_form_inscription",  'placeholder' => 'Numéro de téléphone', 'oninput' => 'formatPhone(this)', "maxlength" => "14"], 'label' => false])

            /*->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'class' => "input_form_inscription",
                    'placeholder' => 'Mot de passe'
                ],
                'label' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez choisir un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),
                    new Callback([$this, 'validatePasswords'])
                ],
            ])
            ->add('plainPasswordConfirm', PasswordType::class, [
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'class' => "input_form_inscription",
                    'placeholder' => 'Confirmer le mot de passe'
                ],
                'label' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez confirmer votre mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),
                    new Callback([$this, 'validatePasswords'])
                ],
            ])*/;

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            if ($form->isSubmitted() && !$form->isValid()) {
                $form->addError(new FormError('Le formulaire contient des erreurs'));
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Clients::class,
        ]);
    }

    public function validatePasswords($value, ExecutionContextInterface $context)
    {

        $form = $context->getRoot();
        $plainPassword = $form->get('plainPassword')->getData();
        $plainPasswordConfirm = $form->get('plainPasswordConfirm')->getData();

        if (!empty($plainPassword) && !empty($plainPasswordConfirm) && $plainPassword !== $plainPasswordConfirm) {

            $context->buildViolation('Les mots de passe ne correspondent pas')
                ->addViolation();
        }
    }
}
