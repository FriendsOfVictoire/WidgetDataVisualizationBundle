<?php

namespace Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Widget\DataVisualizationBundle\Entity\DataSet;

/**
 * Class ChartOption.
 *
 * @ORM\Entity()
 * @ORM\Table("vic_widget_datavisualization_dataset_options")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="chartType", type="string")
 */
abstract class ChartOption
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var DataSet
     * @ORM\OneToOne(targetEntity="Victoire\Widget\DataVisualizationBundle\Entity\DataSet", mappedBy="chartOption")
     */
    protected $dataset;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * set id.
     *
     * @return ChartOption
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set dataset.
     *
     * @param \Victoire\Widget\DataVisualizationBundle\Entity\DataSet $dataset
     *
     * @return ChartOption
     */
    public function setDataset(\Victoire\Widget\DataVisualizationBundle\Entity\DataSet $dataset = null)
    {
        $this->dataset = $dataset;

        return $this;
    }

    /**
     * Get dataset.
     *
     * @return \Victoire\Widget\DataVisualizationBundle\Entity\DataSet
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return;
    }
}
