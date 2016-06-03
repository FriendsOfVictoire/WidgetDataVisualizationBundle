<?php

namespace Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization;

/**
 * Legend.
 *
 * @ORM\Entity
 */
class Legend extends GlobalOption
{
    /**
     * @var WidgetDataVisualization
     * @ORM\OneToOne(targetEntity="Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization", mappedBy="legend")
     */
    private $widgetDatavisualization;
    /**
     * @var string
     *
     * @ORM\Column(name="display", type="boolean", nullable=true)
     */
    private $display;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255, nullable=true)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="fullWidth", type="boolean", nullable=true)
     */
    private $fullWidth;

    /**
     * Set display.
     *
     * @param string $display
     *
     * @return Legend
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display.
     *
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set position.
     *
     * @param string $position
     *
     * @return Legend
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position.
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set fullWidth.
     *
     * @param string $fullWidth
     *
     * @return Legend
     */
    public function setFullWidth($fullWidth)
    {
        $this->fullWidth = $fullWidth;

        return $this;
    }

    /**
     * Get fullWidth.
     *
     * @return string
     */
    public function getFullWidth()
    {
        return $this->fullWidth;
    }

    /**
     * @return WidgetDataVisualization
     */
    public function getWidgetDataVisualization()
    {
        return $this->widgetDatavisualization;
    }

    /**
     * @param WidgetDataVisualization $widgetDatavisualization
     */
    public function setWidgetDataVisualization($widgetDatavisualization)
    {
        $this->widgetDatavisualization = $widgetDatavisualization;
    }
}
