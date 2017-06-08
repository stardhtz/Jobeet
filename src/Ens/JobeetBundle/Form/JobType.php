<?php

namespace Ens\JobeetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('category');
        $builder->add('type', 'choice', array('choices' => array('full-time' => 'Full time', 'part-time' => 'Part time', 'freelance' => 'Freelance'), 'expanded' => true));
        $builder->add('company');
        $builder->add('file', 'file', array('label' => 'Company logo', 'required' => false));
        $builder->add('url');
        $builder->add('position');
        $builder->add('location');
        $builder->add('description');
        $builder->add('how_to_apply', null, array('label' => 'How to apply?'));
        $builder->add('is_public', null, array('label' => 'Public?'));
        $builder->add('email');
    }

    public function getName()
    {
        return 'job';
    }


    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ens_jobeetbundle_job';
    }

}
