<?php

namespace Victoire\Widget\DataVisualizationBundle\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Victoire\Widget\DataVisualizationBundle\Form\Type\CustomMultipleType;

class DuplicateDataListener implements EventSubscriberInterface
{
    private $factory;
    private $length;

    public function __construct(FormFactoryInterface $factory, $length = null)
    {
        $this->factory = $factory;
        $this->length = $length;
    }

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::POST_SET_DATA => 'postSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit',
        ];
    }

    public function postSetData(FormEvent $event)
    {
        $this->duplicateData($event);
    }

    public function preSubmit(FormEvent $event)
    {
        $this->duplicateData($event);
    }

    private function duplicateData(FormEvent $event)
    {
        if ($this->length) {
            $data = $event->getData();
            for ($i = count($data); $i < $this->length; ++$i) {
                $data[] = null;
            }
            $config = $event->getForm()->getConfig();
            $event->getForm()->getParent()->add(
                $this->factory->createNamed(
                    $config->getName(),
                    CustomMultipleType::class,
                    $data,
                    array_merge($config->getOptions(), ['auto_initialize' => false])
                )
            );
        }
    }
}
