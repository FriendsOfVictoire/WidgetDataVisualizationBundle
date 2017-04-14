<?php

namespace Victoire\Widget\DataVisualizationBundle\Resolver;

use Victoire\Bundle\WidgetBundle\Model\Widget;
use Victoire\Bundle\WidgetBundle\Resolver\BaseWidgetContentResolver;
use Victoire\Widget\DataVisualizationBundle\Entity\DataSet;
use Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization;

/**
 * CRUD operations on WidgetDataVisualization Widget.
 *
 * The widget view has two parameters: widget and content
 *
 * widget: The widget to display, use the widget as you wish to render the view
 * content: This variable is computed in this WidgetManager, you can set whatever you want in it and display it in the show view
 *
 * The content variable depends of the mode: static/businessEntity/entity/query
 *
 * The content is given depending of the mode by the methods:
 *  getWidgetStaticContent
 *  getWidgetBusinessEntityContent
 *  getWidgetEntityContent
 *  getWidgetQueryContent
 *
 * So, you can use the widget or the content in the show.html.twig view.
 * If you want to do some computation, use the content and do it the 4 previous methods.
 *
 * If you just want to use the widget and not the content, remove the method that throws the exceptions.
 *
 * By default, the methods throws Exception to notice the developer that he should implements it owns logic for the widget
 */
class WidgetDataVisualizationContentResolver extends BaseWidgetContentResolver
{
    /**
     * Get the static content of the widget.
     * Reorganize the dataSets to set lines as first to avoid to hide them under bars.
     * Define a "mainType" to use in mixed charts
     *
     * @param Widget $widget
     *
     * @return string The static content
     */
    public function getWidgetStaticContent(Widget $widget)
    {
        $axes = [];
        /** @var DataSet $dataset */
        foreach ($widget->getDatasets() as $dataset)
        {
            if (method_exists($dataset->getChartOption(), 'getYAxisID')){
               $axes[] = $dataset->getChartOption()->getYAxisID();
            }
        }

        /** @var WidgetDataVisualization $widget */
        $ordered = $widget->getDataSets()->partition(function($key, $item) {
            return $item->getType() === 'line';
        });

        $dataSets = array_merge($ordered[0]->toArray(), $ordered[1]->toArray());
        $types = [];
        if ($widget->getDataSets()->count() > 1) {
            foreach($widget->getDataSets() as $key => $dataSet) {
                $types[$key] = $dataSet->getType();
            }
        }

        $types = array_map(function($item) {
           return $item->getType();
        }, $widget->getDataSets()->toArray());

        array_unique($types);
        $mainType = $types[0];
        if (in_array('bar', $types) && in_array('line', $types)) {
            $mainType = 'bar';
        }
        $parameters =  parent::getWidgetStaticContent($widget);

        return array_merge($parameters, [
            'mainType' => $mainType,
            'dataSets' => $dataSets,
            'yAxes' => array_unique($axes)
        ]);
    }

}
