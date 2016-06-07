<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\ChartOptions;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions\RadarChartOption;
use Victoire\Widget\DataVisualizationBundle\Form\Type\ColorType;
use Victoire\Widget\DataVisualizationBundle\Form\Type\DataOptionType;

class RadarChartOptionType extends ChartOptionType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('fill', DataOptionType::class, [
                'entry_type' =>  ChoiceType::class,
                'entry_type_options' => [
                    'choices' => [
                        'widget_datavisualization.form.dataset.chart_option.fill.false.label' => 'false',
                        'widget_datavisualization.form.dataset.chart_option.fill.true.label' => 'true',
                    ],
                    'choices_as_values' => true,
                ],
                'can_be_default' => false,
                'can_be_multiple' => false,
                'label' => 'widget_datavisualization.form.dataset.chart_option.fill.label',
            ])
            ->add('lineTension', IntegerType::class, [
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
            ->add('borderCapStyle', ChoiceType::class, [
                'choices' => [
                    'butt' => 'butt', 'round' => 'round', 'square' => 'square',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.borderCapStyle.label',
            ])
            ->add('borderDash', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'length' => 2,
                'can_be_default' => false,
                'label' => 'widget_datavisualization.form.dataset.chart_option.borderDash.label',
            ])
            ->add('borderDashOffset', IntegerType::class, [
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
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointBackgroundColor.label',
            ])
            ->add('pointBorderWidth', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointBorderWidth.label',
            ])
            ->add('pointRadius', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointRadius.label',
            ])
            ->add('pointHoverRadius', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.pointHoverRadius.label',
            ])
            ->add('hitRadius', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.hitRadius.label',
            ])
            ->add('pointHoverBackgroundColor', DataOptionType::class, [
                'entry_type' => ColorType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
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
    }

    /**
     * {@inheritdoc}
     */
    public function getChartOptionClass()
    {
        return RadarChartOption::class;
    }
}
