<?php

namespace SerieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use SerieBundle\Form\ImageType;

class EpisodeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('episodeNumber', 'integer', array(
                'label' => 'Episode n°: '))

            ->add('name', 'text', array(
                'label' => 'Titre: '))
            ->add('resume', 'textarea', array(
                'label' => 'Détails et synopsis: '))
            ->add('diffusionDate', 'date', [
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd-MM-yyyy',
                'label' => 'Date de diffusion: ',
                'attr' => ["class" => 'js-datepicker form-control',
                           "placeholder" => 'Pick a date']
            ])
            ->add('image', new ImageType(), array(
                'required' => false,
                'label' => 'Image: '))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SerieBundle\Entity\Episode'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'seriebundle_episode';
    }
}
