<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\ChartOptions;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions\BarChartOption;
use Victoire\Widget\DataVisualizationBundle\Form\Type\ColorType;
use Victoire\Widget\DataVisualizationBundle\Form\Type\DataOptionType;

class BarChartOptionType extends ChartOptionType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('yAxisID', DataOptionType::class, [
                'entry_type' => ChoiceType::class,
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'entry_type_options' => [
                    'choices' => [
                        'left' => 'left', 'right' => 'right',
                    ],
                ],
                'can_be_default' => false,
                'can_be_multiple' => false,
                'label' => 'widget_datavisualization.form.dataset.chart_option.yAxisID.label',
            ])
            ->add('backgroundColor', DataOptionType::class, [
                'entry_type' => ColorType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.backgroundColor.label',
            ])
            ->add('borderWidth', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.borderWidth.label',
            ])
            ->add('borderColor', DataOptionType::class, [
                'entry_type' => ColorType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.borderColor.label',
            ])
            ->add('borderSkipped', DataOptionType::class, [
                'entry_type' => ChoiceType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'entry_type_options' => [
                    'choices' => [
                        'bottom' => 'bottom', 'left' => 'left', 'top' => 'top', 'right' => 'right',
                    ],
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.borderSkipped.label',
            ])
            ->add('hoverBackgroundColor', DataOptionType::class, [
                'entry_type' => ColorType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.hoverBackgroundColor.label',
            ])
            ->add('hoverBorderColor', DataOptionType::class, [
                'entry_type' => ColorType::class,
                'length' => $options['length'],
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'label' => 'widget_datavisualization.form.dataset.chart_option.hoverBorderColor.label',
            ])
            ->add('hoverBorderWidth', DataOptionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                ],
                'length' => $options['length'],
                'label' => 'widget_datavisualization.form.dataset.chart_option.hoverBorderWidth.label',
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getChartOptionClass()
    {
        return BarChartOption::class;
    }
}
