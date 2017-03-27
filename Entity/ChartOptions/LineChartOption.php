<?php

namespace Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class LineChartOption.
 *
 * @ORM\Entity()
 */
class LineChartOption extends ChartOption
{
    /**
     * @var string
     * @ORM\Column(name="yAxisID", length=255, nullable=true)
     */
    private $yAxisID = 'left';
    /**
     * @var bool
     * @ORM\Column(name="fill", length=255, type="string", nullable=true)
     */
    private $fill = 'true';

    /**
     * @var int
     * @ORM\Column(name="lineTension", type="string")
     */
    private $lineTension;

    /**
     * @var string
     * @ORM\Column(name="backgroundColor", type="string",length=255, nullable=true)
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
     * @ORM\Column(name="borderCapStyle", length=255, nullable=true)
     */
    private $borderCapStyle;

    /**
     * @var string
     * @ORM\Column(name="borderDash", length=255, nullable=true)
     */
    private $borderDash;

    /**
     * @var string
     * @ORM\Column(name="borderDashOffset", length=255, nullable=true)
     */
    private $borderDashOffset;

    /**
     * @var string
     * @ORM\Column(name="borderJoinStyle", length=255, nullable=true)
     */
    private $borderJoinStyle;

    /**
     * @var string
     * @ORM\Column(name="pointBorderColor", length=255, nullable=true)
     */
    private $pointBorderColor;

    /**
     * @var string
     * @ORM\Column(name="pointBackgroundColor", length=255, nullable=true)
     */
    private $pointBackgroundColor;

    /**
     * @var string
     * @ORM\Column(name="pointBorderWidth", length=255, nullable=true)
     */
    private $pointBorderWidth;

    /**
     * @var string
     * @ORM\Column(name="pointRadius", length=255, nullable=true)
     */
    private $pointRadius;

    /**
     * @var string
     * @ORM\Column(name="pointHoverRadius", length=255, nullable=true)
     */
    private $pointHoverRadius;

    /**
     * @var string
     * @ORM\Column(name="pointHitRadius", length=255, nullable=true)
     */
    private $pointHitRadius;

    /**
     * @var string
     * @ORM\Column(name="pointHoverBackgroundColor", length=255, nullable=true)
     */
    private $pointHoverBackgroundColor;

    /**
     * @var string
     * @ORM\Column(name="pointHoverBorderColor", length=255, nullable=true)
     */
    private $pointHoverBorderColor;

    /**
     * @var string
     * @ORM\Column(name="pointHoverBorderWidth", length=255, nullable=true)
     */
    private $pointHoverBorderWidth;

    /**
     * @var string
     * @ORM\Column(name="pointStyle", length=255, nullable=true)
     */
    private $pointStyle;

    /**
     * Set fill.
     *
     * @param bool $fill
     *
     * @return LineChartOption
     */
    public function setFill($fill)
    {
        $this->fill = $fill;

        return $this;
    }

    /**
     * Get fill.
     *
     * @return bool
     */
    public function getFill()
    {
        return $this->fill;
    }

    /**
     * Set backgroundColor.
     *
     * @param string $backgroundColor
     *
     * @return LineChartOption
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
     * @return LineChartOption
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
     * @return LineChartOption
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
     * Set borderCapStyle.
     *
     * @param string $borderCapStyle
     *
     * @return LineChartOption
     */
    public function setBorderCapStyle($borderCapStyle)
    {
        $this->borderCapStyle = $borderCapStyle;

        return $this;
    }

    /**
     * Get borderCapStyle.
     *
     * @return string
     */
    public function getBorderCapStyle()
    {
        return $this->borderCapStyle;
    }

    /**
     * Set borderDash.
     *
     * @param string $borderDash
     *
     * @return LineChartOption
     */
    public function setBorderDash($borderDash)
    {
        $this->borderDash = $borderDash;

        return $this;
    }

    /**
     * Get borderDash.
     *
     * @return string
     */
    public function getBorderDash()
    {
        return $this->borderDash;
    }

    /**
     * Set borderDashOffset.
     *
     * @param string $borderDashOffset
     *
     * @return LineChartOption
     */
    public function setBorderDashOffset($borderDashOffset)
    {
        $this->borderDashOffset = $borderDashOffset;

        return $this;
    }

    /**
     * Get borderDashOffset.
     *
     * @return string
     */
    public function getBorderDashOffset()
    {
        return $this->borderDashOffset;
    }

    /**
     * Set borderJoinStyle.
     *
     * @param string $borderJoinStyle
     *
     * @return LineChartOption
     */
    public function setBorderJoinStyle($borderJoinStyle)
    {
        $this->borderJoinStyle = $borderJoinStyle;

        return $this;
    }

    /**
     * Get borderJoinStyle.
     *
     * @return string
     */
    public function getBorderJoinStyle()
    {
        return $this->borderJoinStyle;
    }

    /**
     * Set pointBorderColor.
     *
     * @param string $pointBorderColor
     *
     * @return LineChartOption
     */
    public function setPointBorderColor($pointBorderColor)
    {
        $this->pointBorderColor = $pointBorderColor;

        return $this;
    }

    /**
     * Get pointBorderColor.
     *
     * @return string
     */
    public function getPointBorderColor()
    {
        return $this->pointBorderColor;
    }

    /**
     * Set pointBackgroundColor.
     *
     * @param string $pointBackgroundColor
     *
     * @return LineChartOption
     */
    public function setPointBackgroundColor($pointBackgroundColor)
    {
        $this->pointBackgroundColor = $pointBackgroundColor;

        return $this;
    }

    /**
     * Get pointBackgroundColor.
     *
     * @return string
     */
    public function getPointBackgroundColor()
    {
        return $this->pointBackgroundColor;
    }

    /**
     * Set pointBorderWidth.
     *
     * @param string $pointBorderWidth
     *
     * @return LineChartOption
     */
    public function setPointBorderWidth($pointBorderWidth)
    {
        $this->pointBorderWidth = $pointBorderWidth;

        return $this;
    }

    /**
     * Get pointBorderWidth.
     *
     * @return string
     */
    public function getPointBorderWidth()
    {
        return $this->pointBorderWidth;
    }

    /**
     * Set pointRadius.
     *
     * @param string $pointRadius
     *
     * @return LineChartOption
     */
    public function setPointRadius($pointRadius)
    {
        $this->pointRadius = $pointRadius;

        return $this;
    }

    /**
     * Get pointRadius.
     *
     * @return string
     */
    public function getPointRadius()
    {
        return $this->pointRadius;
    }

    /**
     * Set pointHoverRadius.
     *
     * @param string $pointHoverRadius
     *
     * @return LineChartOption
     */
    public function setPointHoverRadius($pointHoverRadius)
    {
        $this->pointHoverRadius = $pointHoverRadius;

        return $this;
    }

    /**
     * Get pointHoverRadius.
     *
     * @return string
     */
    public function getPointHoverRadius()
    {
        return $this->pointHoverRadius;
    }

    /**
     * Set pointHitRadius.
     *
     * @param string $pointHitRadius
     *
     * @return LineChartOption
     */
    public function setPointHitRadius($pointHitRadius)
    {
        $this->pointHitRadius = $pointHitRadius;

        return $this;
    }

    /**
     * Get pointHitRadius.
     *
     * @return string
     */
    public function getPointHitRadius()
    {
        return $this->pointHitRadius;
    }

    /**
     * Set pointHoverBackgroundColor.
     *
     * @param string $pointHoverBackgroundColor
     *
     * @return LineChartOption
     */
    public function setPointHoverBackgroundColor($pointHoverBackgroundColor)
    {
        $this->pointHoverBackgroundColor = $pointHoverBackgroundColor;

        return $this;
    }

    /**
     * Get pointHoverBackgroundColor.
     *
     * @return string
     */
    public function getPointHoverBackgroundColor()
    {
        return $this->pointHoverBackgroundColor;
    }

    /**
     * Set pointHoverBorderColor.
     *
     * @param string $pointHoverBorderColor
     *
     * @return LineChartOption
     */
    public function setPointHoverBorderColor($pointHoverBorderColor)
    {
        $this->pointHoverBorderColor = $pointHoverBorderColor;

        return $this;
    }

    /**
     * Get pointHoverBorderColor.
     *
     * @return string
     */
    public function getPointHoverBorderColor()
    {
        return $this->pointHoverBorderColor;
    }

    /**
     * Set pointHoverBorderWidth.
     *
     * @param string $pointHoverBorderWidth
     *
     * @return LineChartOption
     */
    public function setPointHoverBorderWidth($pointHoverBorderWidth)
    {
        $this->pointHoverBorderWidth = $pointHoverBorderWidth;

        return $this;
    }

    /**
     * Get pointHoverBorderWidth.
     *
     * @return string
     */
    public function getPointHoverBorderWidth()
    {
        return $this->pointHoverBorderWidth;
    }

    /**
     * Set pointStyle.
     *
     * @param string $pointStyle
     *
     * @return LineChartOption
     */
    public function setPointStyle($pointStyle)
    {
        $this->pointStyle = $pointStyle;

        return $this;
    }

    /**
     * Get pointStyle.
     *
     * @return string
     */
    public function getPointStyle()
    {
        return $this->pointStyle;
    }
    public function getType()
    {
        return 'line';
    }

    /**
     * @return int
     */
    public function getLineTension()
    {
        return $this->lineTension;
    }

    /**
     * @param int $lineTension
     */
    public function setLineTension($lineTension)
    {
        $this->lineTension = $lineTension;
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
     * @return LineChartOption
     */
    public function setYAxisID($yAxisID)
    {
        $this->yAxisID = $yAxisID;
        return $this;
    }
}
