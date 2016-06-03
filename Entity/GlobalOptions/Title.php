<?php

namespace Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization;

/**
 * Title.
 *
 * @ORM\Entity
 */
class Title extends GlobalOption
{
    /**
     * @var WidgetDataVisualization
     * @ORM\OneToOne(targetEntity="Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization", mappedBy="title")
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
     * @var string
     *
     * @ORM\Column(name="fontSize", type="integer", nullable=true)
     */
    private $fontSize;

    /**
     * @var string
     *
     * @ORM\Column(name="fontFamily", type="string", length=255, nullable=true)
     */
    private $fontFamily;

    /**
     * @var string
     *
     * @ORM\Column(name="fontColor", type="string", length=255, nullable=true)
     */
    private $fontColor;

    /**
     * @var string
     *
     * @ORM\Column(name="fontStyle", type="string", length=255, nullable=true)
     */
    private $fontStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="padding", type="integer", nullable=true)
     */
    private $padding;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * Set display.
     *
     * @param string $display
     *
     * @return Title
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
     * @return Title
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
     * @return Title
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
     * Set fontSize.
     *
     * @param string $fontSize
     *
     * @return Title
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * Get fontSize.
     *
     * @return string
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * Set fontFamily.
     *
     * @param string $fontFamily
     *
     * @return Title
     */
    public function setFontFamily($fontFamily)
    {
        $this->fontFamily = $fontFamily;

        return $this;
    }

    /**
     * Get fontFamily.
     *
     * @return string
     */
    public function getFontFamily()
    {
        return $this->fontFamily;
    }

    /**
     * Set fontColor.
     *
     * @param string $fontColor
     *
     * @return Title
     */
    public function setFontColor($fontColor)
    {
        $this->fontColor = $fontColor;

        return $this;
    }

    /**
     * Get fontColor.
     *
     * @return string
     */
    public function getFontColor()
    {
        return $this->fontColor;
    }

    /**
     * Set fontStyle.
     *
     * @param string $fontStyle
     *
     * @return Title
     */
    public function setFontStyle($fontStyle)
    {
        $this->fontStyle = $fontStyle;

        return $this;
    }

    /**
     * Get fontStyle.
     *
     * @return string
     */
    public function getFontStyle()
    {
        return $this->fontStyle;
    }

    /**
     * Set padding.
     *
     * @param string $padding
     *
     * @return Title
     */
    public function setPadding($padding)
    {
        $this->padding = $padding;

        return $this;
    }

    /**
     * Get padding.
     *
     * @return string
     */
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * Set text.
     *
     * @param string $text
     *
     * @return Title
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
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
