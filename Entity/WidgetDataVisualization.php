<?php

namespace Victoire\Widget\DataVisualizationBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;
use Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions\Legend;
use Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions\Title;
use Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions\Tooltips;

/**
 * WidgetDataVisualization.
 *
 * @ORM\Table("vic_widget_datavisualization")
 * @ORM\Entity
 */
class WidgetDataVisualization extends Widget
{
    /**
     * @var DataSet[]
     *
     * @ORM\OneToMany(targetEntity="Victoire\Widget\DataVisualizationBundle\Entity\DataSet" , mappedBy="widgetDatavisualization", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    protected $dataSets;

    /**
     * @var array
     * @ORM\Column(name="labels", type="json_array")
     */
    private $labels;

    /**
     * @var Title
     * @ORM\OneToOne(targetEntity="Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions\Title", inversedBy="widgetDatavisualization", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $title;

    /**
     * @var Legend
     * @ORM\OneToOne(targetEntity="Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions\Legend", inversedBy="widgetDatavisualization", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $legend;

    /**
     * @var Tooltips
     * @ORM\OneToOne(targetEntity="Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions\Tooltips", inversedBy="widgetDatavisualization", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $tooltips;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle).
     *
     * @return string
     */
    public function __toString()
    {
        return 'DataVisualization #'.$this->id;
    }
    public function __construct()
    {
        parent::__construct();
        $this->dataSets = new ArrayCollection();
    }

    /**
     * Set labels.
     *
     * @param array $labels
     *
     * @return WidgetDataVisualization
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Get labels.
     *
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Get asynchronous.
     *
     * @return bool
     */
    public function getAsynchronous()
    {
        return $this->asynchronous;
    }

    /**
     * Add dataSet.
     *
     * @param DataSet $dataSet
     *
     * @return WidgetDataVisualization
     */
    public function addDataSet(DataSet $dataSet)
    {
        $this->dataSets[] = $dataSet;
        $dataSet->setWidgetDatavisualization($this);

        return $this;
    }

    /**
     * Remove dataSet.
     *
     * @param DataSet $dataSet
     */
    public function removeDataSet(DataSet $dataSet)
    {
        $this->dataSets->removeElement($dataSet);
    }

    /**
     * Get dataSets.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDataSets()
    {
        return $this->dataSets;
    }

    /**
     * Set view.
     *
     * @param \Victoire\Bundle\CoreBundle\Entity\View $view
     *
     * @return WidgetDataVisualization
     */
    public function setView(\Victoire\Bundle\CoreBundle\Entity\View $view = null)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * @return Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param Title $title
     */
    public function setTitle(Title $title)
    {
        $this->title = $title;
        $title->setWidgetDataVisualization($this);
    }

    /**
     * @return Legend
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @param Legend $legend
     */
    public function setLegend(Legend $legend)
    {
        $this->legend = $legend;
        $legend->setWidgetDataVisualization($this);
    }

    /**
     * @return Tooltips
     */
    public function getTooltips()
    {
        return $this->tooltips;
    }

    /**
     * @param Tooltips $tooltips
     */
    public function setTooltips(Tooltips $tooltips)
    {
        $this->tooltips = $tooltips;
        $tooltips->setWidgetDataVisualization($this);
    }
}
