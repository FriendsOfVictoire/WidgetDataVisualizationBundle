<?php

namespace Victoire\Widget\DataVisualizationBundle\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Victoire\Widget\DataVisualizationBundle\DependencyInjection\Chain\ChartOptionChain;
use Victoire\Widget\DataVisualizationBundle\Form\Transformer\DataToDataOptionTransformer;

/**
 * Class ChartOptionListener
 * @package Victoire\Widget\DataVisualizationBundle\Listener
 */
class ChartOptionListener implements EventSubscriberInterface
{
    private $chartOptionChain;
    private $factory;
    private $length;

    /**
     * ChartOptionListener constructor.
     * @param ChartOptionChain $chartOptionChain
     * @param FormFactoryInterface $factory
     * @param $length
     */
    public function __construct(ChartOptionChain $chartOptionChain, FormFactoryInterface $factory, $length)
    {
        $this->chartOptionChain = $chartOptionChain;
        $this->factory = $factory;
        $this->length = $length;
    }

    /**
     * @inheritdoc
     */
    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::POST_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit',
        ];
    }

    /**
     * @param FormEvent $event
     */
    public function preSetData(FormEvent $event)
    {
        $this->buildChartOptionForm($event);
    }

    /**
     * @param FormEvent $event
     */
    public function preSubmit(FormEvent $event)
    {
        $this->buildChartOptionForm($event);
    }

    /**
     * Create the chart Option Form
     * @param FormEvent $event
     */
    private function buildChartOptionForm(FormEvent $event)
    {
        $data = $event->getData();
        //var_dump('here');
        if ($data) {
            //var_dump($data->getBackgroundColor());
            $form = $event->getForm()->getParent();
            if ($form->has('chartOption')) {
                $chartOption = $this->mapChartOption(
                    $this->chartOptionChain->getChartOptionEntity($data),
                    $form->get('chartOption')->getData()
                );
                //var_dump($form->get('chartOption')->getData()->getBackgroundColor());
                $form->remove('chartOption');
            } else {
                $chartOption = null;
            }
            $form->add(
                $this->factory->createNamed('chartOption', $this->chartOptionChain->getChartOption($data),
                $chartOption, [
                    'auto_initialize' => false,
                    'length' => $this->length,
                    'label' => 'widget_datavisualization.chart_option.'.$data,
                ])
            );
        }
    }

    /**
     * Map the new ChartOption with old data
     * @param $charOptionClass
     * @param $data
     * @return mixed
     */
    private function mapChartOption($charOptionClass, $data)
    {
        $chartOption = new $charOptionClass();
        foreach ($data as $key => $value) {
            $setter = 'set'.ucfirst($key);
            if (method_exists($chartOption, $setter)) {
                $chartOption->$setter($value);
            }
        }

        return $chartOption;
    }
}
