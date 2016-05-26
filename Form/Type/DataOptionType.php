<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Widget\DataVisualizationBundle\Form\Transformer\DataToDataOptionTransformer;
use Victoire\Widget\DataVisualizationBundle\Listener\DuplicateDataListener;

/**
 * Class DataOptionType
 * @package Victoire\Widget\DataVisualizationBundle\Form\Type
 */
class DataOptionType extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new DataToDataOptionTransformer($options['can_be_default']));
        // if we can have a default value
        if ($options['can_be_multiple']) {
            if ($options['can_be_default']) {
                $builder->add('isDefault', 'checkbox', [
                    'label' => 'widget_datavisualization.form.data.option.isDefault.label',
                ]);
                $builder->add('data_option_single', $options['entry_type'], $options['entry_type_options']);
            }
            $builder->add('data_option_multiple', CustomMultipleType::class,
                array_merge([
                    'label' => false,
                    'length' => $options['length'],
                ], array_merge($options['entry_options'], [
                    'entry_type' => $options['entry_type'],
                    'entry_options' => $options['entry_type_options'],
                ]))
            );

            $listener = new DuplicateDataListener($builder->getFormFactory(), $options['length']);
            $builder->get('data_option_multiple')->addEventSubscriber($listener);
        }else{
            $builder->add('data_option_single', $options['entry_type'], $options['entry_type_options']);
        }

    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults([
            'can_be_default' => true,
            'can_be_multiple' => true,
            'entry_type' => TextType::class,
            'entry_options' => [],
            'entry_type_options' => [],
            'length' => null,
            'required' => false,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view, $form, $options);
        $view->vars['can_be_default'] = $options['can_be_default'];
        $view->vars['can_be_multiple'] = $options['can_be_multiple'];
    }
}
