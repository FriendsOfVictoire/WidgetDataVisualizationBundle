<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\ChartOptions;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions\LineChartOption;
use Victoire\Widget\DataVisualizationBundle\Form\Type\ColorType;
use Victoire\Widget\DataVisualizationBundle\Form\Type\DataOptionType;

class LineChartOptionType extends ChartOptionType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('fill', ChoiceType::class, [
                'choices' => [
                    'widget_datavisualization.form.dataset.chart_option.fill.true.label' => 'true',
                    'widget_datavisualization.form.dataset.chart_option.fill.false.label' => 'false',
                ],
                'choices_as_values' => true,
                'label' => 'widget_datavisualization.form.dataset.chart_option.fill.label',
            ])
            ->add('lineTension', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'can_be_default' => false,
                'can_be_multiple' => false,
                'label' => 'widget_datavisualization.form.dataset.chart_option.lineTension.label',
            ])
            ->add('backgroundColor', DataOptionType::class, [
                'entry_type' => ColorType::class,
                'can_be_default' => false,
                'can_be_multiple' => false,
                'label' => 'widget_datavisualization.form.dataset.chart_option.backgroundColor.label',
            ])
            ->add('borderWidth', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'can_be_default' => false,
                'can_be_multiple' => false,
                'label' => 'widget_datavisualization.form.dataset.chart_option.borderWidth.label',
            ])
            ->add('borderColor', DataOptionType::class, [
                'entry_type' => ColorType::class,
                'can_be_default' => false,
                'can_be_multiple' => false,
                'label' => 'widget_datavisualization.form.dataset.chart_option.borderColor.label',
            ])
            ->add('borderCapStyle', DataOptionType::class, [
                'can_be_default' => false,
                'can_be_multiple' => false,
                'entry_type' => ChoiceType::class,
                'entry_type_options' => [
                    'choices' => [
                        'butt' => 'butt',
                        'round' => 'round',
                        'square' => 'square',
                    ],
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.borderCapStyle.label',
            ])
            ->add('borderDash', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'length' => 2,
                'can_be_default' => false,
                'label' => 'widget_datavisualization.form.dataset.chart_option.borderDash.label',
            ])
            ->add('borderDashOffset', DataOptionType::class, [
                'can_be_default' => false,
                'can_be_multiple' => false,
                'entry_type' => IntegerType::class,
                'label' => 'widget_datavisualization.form.dataset.chart_option.borderDashOffset.label',
            ])
            ->add('borderJoinStyle', ChoiceType::class, [
                'choices' => [
                    'bevel' => 'bevel', 'round' => 'round', 'miter' => 'miter',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.borderJoinStyle.label',
            ])
            ->add('pointBorderColor', DataOptionType::class, [
                'entry_type' => ColorType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointBorderColor.label',
            ])
            ->add('pointBackgroundColor', DataOptionType::class, [
                'entry_type' => ColorType::class,
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'length' => $options['length'],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointBackgroundColor.label',
            ])
            ->add('pointBorderWidth', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'length' => $options['length'],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointBorderWidth.label',
            ])
            ->add('pointRadius', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'length' => $options['length'],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointRadius.label',
            ])
            ->add('pointHoverRadius', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'length' => $options['length'],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointHoverRadius.label',
            ])
            ->add('pointHitRadius', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'length' => $options['length'],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointHitRadius.label',
            ])
            ->add('pointHoverBackgroundColor', DataOptionType::class, [
                'entry_type' => ColorType::class,
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'length' => $options['length'],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointHoverBackgroundColor.label',
            ])
            ->add('pointHoverBorderColor', DataOptionType::class, [
                'entry_type' => ColorType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointHoverBorderColor.label',
            ])
            ->add('pointHoverBorderWidth', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointHoverBorderWidth.label',
            ])
            ->add('pointStyle', DataOptionType::class, [
                'entry_type' => ChoiceType::class,
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'length' => $options['length'],
                'entry_type_options' => [
                    'choices' => [
                            'circle' => 'circle', 'triangle' => 'triangle', 'rect' => 'rect', 'rectRot' => 'rectRot', 'cross' => 'cross', 'crossRot' => 'crossRot', 'star' => 'star', 'line' => 'line', 'dash' => 'dash',
                    ],
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointStyle.label',
            ])
        ;
        $builder->get('backgroundColor')->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) {
           //var_dump($event->getData());
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getChartOptionClass()
    {
        return LineChartOption::class;
    }
}
