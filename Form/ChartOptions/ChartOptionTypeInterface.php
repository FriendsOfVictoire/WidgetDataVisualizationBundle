<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\ChartOptions;

interface ChartOptionTypeInterface
{
    /**
     * Return the Chart Option assiocated class.
     *
     * @return string
     */
    public function getChartOptionClass();
}
