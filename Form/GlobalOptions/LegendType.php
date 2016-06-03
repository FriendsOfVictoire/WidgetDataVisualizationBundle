<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\GlobalOptions;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LegendType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('display', ChoiceType::class, [
                    'choices' => [
                        'widget_datavisualization.form.dataset.global_option.display.false.label' => false,
                        'widget_datavisualization.form.dataset.global_option.display.true.label' => true,
                    ],
                    'choices_as_values' => true,
                    'label' => 'widget_datavisualization.form.dataset.global_option.display.label',
                ]
            )
            ->add('position', ChoiceType::class, [
                'choices' => [
                    'top' => 'top',
                    'bottom' => 'bottom',
                ],
                'label' => 'widget_datavisualization.form.dataset.global_option.position.label',
            ])
            ->add('fullWidth', ChoiceType::class, [
                    'choices' => [
                        'widget_datavisualization.form.dataset.global_option.fullWidth.true.label' => true,
                        'widget_datavisualization.form.dataset.global_option.fullWidth.false.label' => false,
                    ],
                    'choices_as_values' => true,
                    'label' => 'widget_datavisualization.form.dataset.global_option.fullWidth.label',
                ]
            )
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions\Legend',
        ));
    }
}
