<?php

namespace Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PieChartOption.
 *
 * @ORM\Entity()
 */
class PieChartOption extends ChartOption
{
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
     * @return PieChartOption
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
     * @return PieChartOption
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
     * @return PieChartOption
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
     * Set hoverBackgroundColor.
     *
     * @param string $hoverBackgroundColor
     *
     * @return PieChartOption
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
     * @return PieChartOption
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
     * @return PieChartOption
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
        return 'pie';
    }
}
