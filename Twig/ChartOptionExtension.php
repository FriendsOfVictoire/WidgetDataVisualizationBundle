<?php

namespace Victoire\Widget\DataVisualizationBundle\Twig;

use Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions\ChartOption;
use Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions\GlobalOption;

class ChartOptionExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            'getChartOptionValues' => new \Twig_Function_Method($this, 'getChartOptionValues'),
            'getGlobalOptionValues' => new \Twig_Function_Method($this, 'getGlobalOptionValues'),
            'displayJsonFor' => new \Twig_Function_Method($this, 'displayJsonFor', array('is_safe' => array('html'))),
        );
    }

    public function getChartOptionValues(ChartOption $chartOption)
    {
        $classMethods = get_class_methods($chartOption);
        $chartOptionValues = [];
        foreach ($classMethods as $classMethod) {
            if ('get' === substr($classMethod, 0, 3)
                && $classMethod !== 'getId'
                && $classMethod !== 'getType'
                && $classMethod !== 'getDataset'
                && $classMethod !== 'getWidgetDatavisualization'
                && $chartOption->$classMethod() !== null) {
                $chartOptionValues[] = lcfirst(str_replace('get', '', $classMethod));
            }
        }

        return $chartOptionValues;
    }

    public function getGlobalOptionValues(GlobalOption $globalOption)
    {
        $classMethods = get_class_methods($globalOption);
        $globalOptionValues = [];
        foreach ($classMethods as $classMethod) {
            if ('get' === substr($classMethod, 0, 3)
                && $classMethod !== 'getId'
                && $classMethod !== 'getWidgetDataVisualization'
                && $globalOption->$classMethod() !== null) {
                $globalOptionValues[] = lcfirst(str_replace('get', '', $classMethod));
            }
        }

        return $globalOptionValues;
    }
    public function displayJsonFor($value)
    {
        if (is_int($value)) {
            return $value;
        }
        if (is_string($value)) {
            return '"'.$value.'"';
        }
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        return $value;
    }
    public function getName()
    {
        return 'victoire_widget_datavisualization_chart_option_extension';
    }
}
