<?php

namespace Victoire\Widget\DataVisualizationBundle\DependencyInjection\Chain;

use Victoire\Widget\DataVisualizationBundle\Form\ChartOptions\ChartOptionType;

class ChartOptionChain
{
    private $chartOptions;

    public function __construct()
    {
        $this->chartOptions = [];
    }

    public function addChartOption(ChartOptionType $chartOption, $alias)
    {
        $ref = new \ReflectionClass($chartOption);
        $this->chartOptions[$alias]['form'] = $ref->getName();
        $this->chartOptions[$alias]['entity'] = $chartOption->getChartOptionClass();
    }

    public function getChartOptions()
    {
        return $this->chartOptions;
    }

    public function getChartOption($alias)
    {
        return $this->chartOptions[$alias]['form'];
    }

    public function getChartOptionEntity($alias)
    {
        return $this->chartOptions[$alias]['entity'];
    }
}
