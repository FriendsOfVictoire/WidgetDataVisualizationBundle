<?php

namespace Victoire\Widget\DataVisualizationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Widget\DataVisualizationBundle\DependencyInjection\Chain\ChartOptionChain;
use Victoire\Widget\DataVisualizationBundle\Form\Type\CustomMultipleType;
use Victoire\Widget\DataVisualizationBundle\Listener\ChartOptionListener;
use Victoire\Widget\DataVisualizationBundle\Listener\DuplicateDataListener;

/**
 * Class DataSetType.
 */
class DataSetType extends AbstractType
{
    private $chartOptionChain;

    /**
     * DataSetType constructor.
     *
     * @param ChartOptionChain $chartOptionChain
     */
    public function __construct(ChartOptionChain $chartOptionChain)
    {
        $this->chartOptionChain = $chartOptionChain;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = [];
        foreach ($this->chartOptionChain->getChartOptions() as $alias => $chartOption) {
            $choices['widget_datavisualization.chart_option.'.$alias] = $alias;
        }
        $builder
            ->add('title', null, [
                'label' => 'widget_datavisualization.form.dataset.chart.option.title.label',
            ])
            ->add('type', ChoiceType::class, [
                'choices' => $choices,
                'choices_as_values' => true,
                'attr' => [
                    'data-refreshOnChange' => 'true',
                    'data-target' => '.vic-modal-body .vic-container-fluid .vic-tab-pane.vic-active:not(.datavisualizationForm)',
                ],
                'placeholder' => 'widget_datavisualization.form.dataset.chart.option.placeholder.label',
                'empty_data' => null,

            ])
            ->add('data', CustomMultipleType::class, [
                'label' => 'widget_datavisualization.form.dataset.data.label',
                'entry_type' => TextType::class,
                'entry_options' => [
                    'required' => true,
                ],
                'allow_add' => false,
                'allow_delete' => false,
                'by_reference' => false,
                'dynamicLabel' => '{{formRootId}}[labels][{{index}}]',
                'length' => $options['label_length'],
            ])
        ;
        $listener = new DuplicateDataListener($builder->getFormFactory(), $options['label_length']);
        $builder->get('data')->addEventSubscriber($listener);
        $listener = new ChartOptionListener($this->chartOptionChain, $builder->getFormFactory(), $options['label_length']);
        $builder->get('type')->addEventSubscriber($listener);
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Victoire\Widget\DataVisualizationBundle\Entity\DataSet',
            'label_length' => null,
        ));
    }
}
