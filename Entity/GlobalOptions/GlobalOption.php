<?php

namespace Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ChartOption.
 *
 * @ORM\Entity()
 * @ORM\Table("vic_widget_datavisualization_global_options")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="optionType", type="string")
 */
abstract class GlobalOption
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
