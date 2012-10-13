<?php

namespace MilosSilni\CKEditorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;


class CKEditorType extends AbstractType
{
  public function buildForm(FormBuilder $builder, array $options)
  {
    $builder->setAttribute('options', $options['options']);
  }
  
  public function buildView(FormView $view, FormInterface $form)
  {
    $view->set('options', $form->getAttribute('options'));
  }
  
  public function getDefaultOptions(array $options)
  {
    return array(
        'attr' => array('class' => 'editor-html'),
        'options' => array()
    );
  }

  public function getParent(array $options)
  {
    return 'textarea';
  }

  public function getName()
  {
    return 'ckeditor';
  }
}