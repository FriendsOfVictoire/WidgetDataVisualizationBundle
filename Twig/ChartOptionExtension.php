<?php

namespace Victoire\Widget\DataVisualizationBundle\Twig;

use Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions\ChartOption;

class ChartOptionExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            'getChartOptionValues' => new \Twig_Function_Method($this, 'getChartOptionValues'),
        );
    }

    public function getChartOptionValues(ChartOption $chartOption)
    {
        $classMethods = get_class_methods($chartOption);
        $chartOptionValues = [];
        foreach ($classMethods as $classMethod) {
            if (substr($classMethod, 0, 3) === 'get' && $classMethod !== 'getId' && $classMethod !== 'getType' && $classMethod !== 'getDataset' && $chartOption->$classMethod() !== null) {
                $chartOptionValues[] = lcfirst(str_replace('get', '', $classMethod));
            }
        }

        return $chartOptionValues;
    }
    public function getName()
    {
        return 'victoire_widget_datavisualization_chart_option_extension';
    }
}
