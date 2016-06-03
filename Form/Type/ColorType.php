<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Class ColorType.
 * TODO awesome color picker with a transparency.
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
