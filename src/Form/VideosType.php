<?php

namespace App\Form;

use App\Entity\Videos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VideosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('slug')
            ->add('description')
            ->add('id_youtube')
            ->add('created_at')
            ->add('updated_at')
            ->add('featured_image')
            ->add('date_sortie_youtube')
            ->add('users')
            ->add('playlist')
            ->add('categories')
            ->add('jeux')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Videos::class,
        ]);
    }
}
