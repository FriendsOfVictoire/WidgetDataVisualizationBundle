<?php

namespace Victoire\Widget\DataVisualizationBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ChartOptionCompilerPass implements CompilerPassInterface
{
    /**
     * Process filter.
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if ($container->hasDefinition('victoire.widget.datavisualization.chart_option_chain')) {
            $definition = $container->getDefinition(
                'victoire.widget.datavisualization.chart_option_chain'
            );

            $taggedServices = $container->findTaggedServiceIds(
                'datavisualization.chart_option'
            );

            foreach ($taggedServices as $id => $tags) {
                foreach ($tags as $attributes) {
                    $definition->addMethodCall('addChartOption', [
                            new Reference($id),
                            $attributes['alias'],
                        ]
                    );
                }
            }
        }
    }
}
