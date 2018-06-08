<?php

namespace App\Form;

use App\Entity\PartidoUsuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartidoUsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('golesLocal', IntegerType::class, array(
                'error_bubbling' => true,
            ))
            ->add('golesVisitante', IntegerType::class, array(
                'error_bubbling' => true,
            ))
        ;
     }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => PartidoUsuario::class,
        ));
    }

    public function getBlockPrefix()
    {
        return 'app_partido_usuario';
    }
}
