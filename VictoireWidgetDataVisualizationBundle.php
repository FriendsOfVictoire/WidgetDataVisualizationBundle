<?php

namespace Victoire\Widget\DataVisualizationBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Victoire\Widget\DataVisualizationBundle\DependencyInjection\Compiler\ChartOptionCompilerPass;

class VictoireWidgetDataVisualizationBundle extends Bundle
{
    /**
     * Build bundle.
     *
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ChartOptionCompilerPass());
    }
}
