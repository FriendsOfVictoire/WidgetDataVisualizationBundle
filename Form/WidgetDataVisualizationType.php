<?php

namespace Victoire\Widget\DataVisualizationBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Widget\DataVisualizationBundle\Form\Type\CustomMultipleType;

/**
 * Class WidgetDataVisualizationType
 * @package Victoire\Widget\DataVisualizationBundle\Form
 */
class WidgetDataVisualizationType extends WidgetType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('labels', CustomMultipleType::class, [
                    'label' => 'widget_datavisualization.form.labels.label',
                    'entry_type' => TextType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                    'elem_class' => 'col-sm-4',
                    'action_button_class' => 'data-visualization-refresh',
            ]);

        $builder->get('labels')->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($options) {
            $this->addDataSetsForm($event);
        });
        $builder->get('labels')->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) use ($options) {
            $this->addDataSetsForm($event);
        });
        parent::buildForm($builder, $options);
    }

    /**
     * Add Datasets form
     * @param FormEvent $event
     */
    private function addDataSetsForm(FormEvent $event)
    {
        $form = $event->getForm()->getParent();
        $form->add('dataSets', CustomMultipleType::class, [
                'label' => 'widget_datavisualization.form.datasets.label',
                'entry_type' => DataSetType::class,
                'allow_delete' => true,
                'allow_add' => true,
                'by_reference' => false,
                'entry_options' => [
                    'label_length' => count($event->getData()) == 0 ? null : count($event->getData()),
                ],
            ]);
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'data_class' => 'Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization',
            'widget' => 'DataVisualization',
            'translation_domain' => 'victoire',
        ));
    }
}
