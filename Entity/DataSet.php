<?php

namespace Victoire\Widget\DataVisualizationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions\ChartOption;

/**
 * Dataset.
 *
 * @ORM\Table(name="vic_widget_datavisualization_dataset")
 * @ORM\Entity()
 */
class DataSet
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var array
     *
     * @ORM\Column(name="data", type="json_array")
     */
    private $data;

    /**
     * @var ChartOption
     * @ORM\OneToOne(targetEntity="Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions\ChartOption", inversedBy="dataset", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $chartOption;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization", inversedBy="dataSets")
     */
    private $widgetDatavisualization;

    private $type;

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
     * Set type.
     *
     * @param string $type
     *
     * @return Dataset
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Dataset
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set data.
     *
     * @param array $data
     *
     * @return Dataset
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data.
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set widgetDatavisualization.
     *
     * @param \Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization $widgetDatavisualization
     *
     * @return DataSet
     */
    public function setWidgetDatavisualization(\Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization $widgetDatavisualization = null)
    {
        $this->widgetDatavisualization = $widgetDatavisualization;

        return $this;
    }

    /**
     * Get widgetDatavisualization.
     *
     * @return \Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization
     */
    public function getWidgetDatavisualization()
    {
        return $this->widgetDatavisualization;
    }

    /**
     * Set chartOption.
     *
     * @param \Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions\ChartOption $chartOption
     *
     * @return DataSet
     */
    public function setChartOption(\Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions\ChartOption $chartOption = null)
    {
        $this->chartOption = $chartOption;

        return $this;
    }

    /**
     * Get chartOption.
     *
     * @return \Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions\ChartOption
     */
    public function getChartOption()
    {
        return $this->chartOption;
    }

    /**
     * If chartOption, returns Type
     *
     * @return string|null
     */
    public function getType()
    {
        if ($this->chartOption instanceof ChartOption) {
            return $this->chartOption->getType();
        }
    }
}
