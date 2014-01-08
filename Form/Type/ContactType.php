<?php

namespace Fluzo\ContactBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text');
        $builder->add('email', 'email');
        $builder->add('subject', 'text');
        $builder->add('message', 'textarea');        
    }

    public function getName()
    {
        return 'contact';
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fluzo\ContactBundle\Entity\Contact',
        ));
    }
}
