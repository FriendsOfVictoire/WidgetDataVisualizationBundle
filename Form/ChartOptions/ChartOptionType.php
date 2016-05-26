<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\ChartOptions;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Widget\DataVisualizationBundle\Form\Transformer\ChartOptionToJsonTransformer;

abstract class ChartOptionType extends AbstractType implements ChartOptionTypeInterface
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new ChartOptionToJsonTransformer());
    }

     /**
      * @param OptionsResolver $resolver
      */
     public function configureOptions(OptionsResolver $resolver)
     {
         $resolver->setDefaults(array(
             'data_class' => $this->getChartOptionClass(),
             'length' => null,
         ));
     }
}
