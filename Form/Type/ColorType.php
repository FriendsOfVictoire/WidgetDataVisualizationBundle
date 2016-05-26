<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

/**
 * Class ColorType
 * @package Victoire\Widget\DataVisualizationBundle\Form\Type
 */
class ColorType extends AbstractType
{
    /**
     * @return mixed
     */
    public function getParent()
    {
        return TextType::class;
    }
}
