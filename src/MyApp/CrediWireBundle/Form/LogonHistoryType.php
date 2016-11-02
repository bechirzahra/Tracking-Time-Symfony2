<?php

namespace MyApp\CrediWireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LogonHistoryType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('logonProject')
            ->add('logoutProject')
            ->add('Project')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\CrediWireBundle\Entity\LogonHistory'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'myapp_crediwirebundle_logonhistory';
    }
}
