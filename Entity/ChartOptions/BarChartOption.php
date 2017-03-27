<?php

namespace Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class BarChartOption.
 *
 * @ORM\Entity()
 */
class BarChartOption extends ChartOption
{
    /**
     * @var string
     * @ORM\Column(name="yAxisID", length=255, nullable=true)
     */
    private $yAxisID = 'left';
    /**
     * @var string
     * @ORM\Column(name="backgroundColor", length=255, nullable=true)
     */
    private $backgroundColor;
    /**
     * @var string
     * @ORM\Column(name="borderWidth", length=255, nullable=true)
     */
    private $borderWidth;
    /**
     * @var string
     * @ORM\Column(name="borderColor", length=255, nullable=true)
     */
    private $borderColor;
    /**
     * @var string
     * @ORM\Column(name="borderSkipped", length=255, nullable=true)
     */
    private $borderSkipped;
    /**
     * @var string
     * @ORM\Column(name="hoverBackgroundColor", length=255, nullable=true)
     */
    private $hoverBackgroundColor;
    /**
     * @var string
     * @ORM\Column(name="hoverBorderColor", length=255, nullable=true)
     */
    private $hoverBorderColor;
    /**
     * @var string
     * @ORM\Column(name="hoverBorderWidth", length=255, nullable=true)
     */
    private $hoverBorderWidth;

    /**
     * Set backgroundColor.
     *
     * @param string $backgroundColor
     *
     * @return BarChartOption
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * Get backgroundColor.
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * Set borderWidth.
     *
     * @param string $borderWidth
     *
     * @return BarChartOption
     */
    public function setBorderWidth($borderWidth)
    {
        $this->borderWidth = $borderWidth;

        return $this;
    }

    /**
     * Get borderWidth.
     *
     * @return string
     */
    public function getBorderWidth()
    {
        return $this->borderWidth;
    }

    /**
     * Set borderColor.
     *
     * @param string $borderColor
     *
     * @return BarChartOption
     */
    public function setBorderColor($borderColor)
    {
        $this->borderColor = $borderColor;

        return $this;
    }

    /**
     * Get borderColor.
     *
     * @return string
     */
    public function getBorderColor()
    {
        return $this->borderColor;
    }

    /**
     * Set borderSkipped.
     *
     * @param string $borderSkipped
     *
     * @return BarChartOption
     */
    public function setBorderSkipped($borderSkipped)
    {
        $this->borderSkipped = $borderSkipped;

        return $this;
    }

    /**
     * Get borderSkipped.
     *
     * @return string
     */
    public function getBorderSkipped()
    {
        return $this->borderSkipped;
    }

    /**
     * Set hoverBackgroundColor.
     *
     * @param string $hoverBackgroundColor
     *
     * @return BarChartOption
     */
    public function setHoverBackgroundColor($hoverBackgroundColor)
    {
        $this->hoverBackgroundColor = $hoverBackgroundColor;

        return $this;
    }

    /**
     * Get hoverBackgroundColor.
     *
     * @return string
     */
    public function getHoverBackgroundColor()
    {
        return $this->hoverBackgroundColor;
    }

    /**
     * Set hoverBorderColor.
     *
     * @param string $hoverBorderColor
     *
     * @return BarChartOption
     */
    public function setHoverBorderColor($hoverBorderColor)
    {
        $this->hoverBorderColor = $hoverBorderColor;

        return $this;
    }

    /**
     * Get hoverBorderColor.
     *
     * @return string
     */
    public function getHoverBorderColor()
    {
        return $this->hoverBorderColor;
    }

    /**
     * Set hoverBorderWidth.
     *
     * @param string $hoverBorderWidth
     *
     * @return BarChartOption
     */
    public function setHoverBorderWidth($hoverBorderWidth)
    {
        $this->hoverBorderWidth = $hoverBorderWidth;

        return $this;
    }

    /**
     * Get hoverBorderWidth.
     *
     * @return string
     */
    public function getHoverBorderWidth()
    {
        return $this->hoverBorderWidth;
    }
    public function getType()
    {
        return 'bar';
    }

    /**
     * @return string
     */
    public function getYAxisID()
    {
        return $this->yAxisID;
    }

    /**
     * @param string $yAxisID
     * @return BarChartOption
     */
    public function setYAxisID($yAxisID)
    {
        $this->yAxisID = $yAxisID;
        return $this;
    }
}
