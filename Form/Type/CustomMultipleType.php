<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CustomMultipleType.
 */
class CustomMultipleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults([
            'elem_class' => null,
            'length' => null,
            'action_button_class' => '',
            'dynamicLabel' => null,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view, $form, $options);
        $view->vars = array_merge($view->vars, [
            'elem_class' => $options['elem_class'],
            'length' => $options['length'],
            'action_button_class' => $options['action_button_class'],
            'dynamicLabel' => $options['dynamicLabel'],
        ]);
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return CollectionType::class;
    }
}
