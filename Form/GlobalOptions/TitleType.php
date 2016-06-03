<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\GlobalOptions;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Widget\DataVisualizationBundle\Form\Type\ColorType;

class TitleType extends AbstractType
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
            ->add('text', TextType::class, [
                'required' => false,
                'label' => 'widget_datavisualization.form.dataset.global_option.text.label',
            ])
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
            ->add('fontSize', IntegerType::class, [
                'required' => false,
                'label' => 'widget_datavisualization.form.dataset.global_option.fontSize.label',
            ])
            ->add('fontFamily', TextType::class, [
                'required' => false,
                'label' => 'widget_datavisualization.form.dataset.global_option.fontFamily.label',
            ])
            ->add('fontColor', ColorType::class, [
                'required' => false,
                'label' => 'widget_datavisualization.form.dataset.global_option.fontColor.label',
            ])
            ->add('fontStyle', TextType::class, [
                'required' => false,
                'label' => 'widget_datavisualization.form.dataset.global_option.fontStyle.label',
            ])
            ->add('padding', IntegerType::class, [
                'required' => false,
                'label' => 'widget_datavisualization.form.dataset.global_option.padding.label',
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions\Title',
        ));
    }
}
