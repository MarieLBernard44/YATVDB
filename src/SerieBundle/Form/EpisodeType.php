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
            ->add('episodeNumber', 'int')
            ->add('name', 'text')
            ->add('resume' 'textarea')
            ->add('diffusionDate', 'date')
            ->add('image', new ImageType())
            ->add('season')
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
