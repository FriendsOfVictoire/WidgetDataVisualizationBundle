<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\GlobalOptions;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Widget\DataVisualizationBundle\Form\Type\ColorType;

class TooltipsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enabled', ChoiceType::class, [
                    'choices' => [
                        'widget_datavisualization.form.dataset.global_option.enabled.true.label' => true,
                        'widget_datavisualization.form.dataset.global_option.enabled.false.label' => false,
                    ],
                    'choices_as_values' => true,
                    'label' => 'widget_datavisualization.form.dataset.global_option.enabled.label',
                ]
            )
            ->add('backgroundColor', ColorType::class, [
                'required' => false,
                'label' => 'widget_datavisualization.form.dataset.global_option.backgroundColor.label',
            ])
            ->add('titleFontFamily', TextType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.titleFontFamily.label',
            ])
            ->add('titleFontSize', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.titleFontSize.label',
            ])
            ->add('titleFontStyle', TextType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.titleFontStyle.label',
            ])
            ->add('titleFontColor', ColorType::class, [
                'required' => false,
                'label' => 'widget_datavisualization.form.dataset.global_option.titleFontColor.label',
            ])
            ->add('titleSpacing', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.titleSpacing.label',
            ])
            ->add('titleMarginBottom', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.titleMarginBottom.label',
            ])
            ->add('bodyFontFamily', TextType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.bodyFontFamily.label',
            ])
            ->add('bodyFontSize', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.bodyFontSize.label',
            ])
            ->add('bodyFontColor', ColorType::class, [
                'required' => false,
                'label' => 'widget_datavisualization.form.dataset.global_option.bodyFontColor.label',
            ])
            ->add('bodySpacing', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.bodySpacing.label',
            ])
            ->add('footerFontFamily', TextType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.footerFontFamily.label',
            ])
            ->add('footerFontSize', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.footerFontSize.label',
            ])
            ->add('footerFontStyle', TextType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.footerFontStyle.label',
            ])
            ->add('footerFontColor', ColorType::class, [
                'required' => false,
                'label' => 'widget_datavisualization.form.dataset.global_option.footerFontColor.label',
            ])
            ->add('footerSpacing', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.footerSpacing.label',
            ])
            ->add('footerMarginTop', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.footerMarginTop.label',
            ])
            ->add('xPadding', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.xPadding.label',
            ])
            ->add('yPadding', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.yPadding.label',
            ])
            ->add('caretSize', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.caretSize.label',
            ])
            ->add('cornerRadius', IntegerType::class, [
                'required' => true,
                'label' => 'widget_datavisualization.form.dataset.global_option.cornerRadius.label',
            ])
            ->add('multiKeyBackground', ColorType::class, [
                'required' => false,
                'label' => 'widget_datavisualization.form.dataset.global_option.multiKeyBackground.label',
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions\Tooltips',
        ));
    }
}
