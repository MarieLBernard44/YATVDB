<?php

namespace SerieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SeasonType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder


            ->add('seasonNumber', 'integer', array(
                'label' => 'Saison n°: '))
            ->add('name', 'text', array(
                'label' => 'Titre: '))
            ->add('resume', 'textarea', array(
                'label' => 'Synonpsis et détails: '))
            ->add('diffusionDate', 'date', [
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd-MM-yyyy',
                'attr' => ["class" => 'js-datepicker form-control',
                           "placeholder" => 'Pick a date'],
                'label' => 'Date de diffusion: '
            ])

        ;
    }
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SerieBundle\Entity\Season'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'seriebundle_season';
    }
}
