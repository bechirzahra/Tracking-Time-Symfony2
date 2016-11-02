<?php

namespace MyApp\CrediWireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ProjectType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('projectName', 'text', array(
                    'attr' => array(
                        'placeholder' => 'Project name', 'class' => 'form-control '
            )))
               ->add('endDate','datetime', array(
                    'label' => 'End Date',
                    'widget' => 'single_text',
                    'input' => 'datetime',
                   'attr' => array(
                        'placeholder' => 'End Date Time', 'class' => 'form-control '
            )
                    ))
                ->add('startDate','datetime', array(
                    'label' => 'Start Date',
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'attr' => array(
                        'placeholder' => 'Start Date Time', 'class' => 'form-control '
            )
                    ))
                ->add('totalHours', 'hidden')
                ->add('owner_id', 'hidden')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\CrediWireBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'myapp_crediwirebundle_project';
    }

}
