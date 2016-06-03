<?php

namespace Victoire\Widget\DataVisualizationBundle\Entity\GlobalOptions;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization;

/**
 * Tooltips.
 *
 * @ORM\Entity
 */
class Tooltips extends GlobalOption
{
    /**
     * @var WidgetDataVisualization
     * @ORM\OneToOne(targetEntity="Victoire\Widget\DataVisualizationBundle\Entity\WidgetDataVisualization", mappedBy="tooltips")
     */
    private $widgetDatavisualization;
    /**
     * @var string
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="backgroundColor", type="string", length=255, nullable=true)
     */
    private $backgroundColor;

    /**
     * @var string
     *
     * @ORM\Column(name="titleFontFamily", type="string", length=255, nullable=true)
     */
    private $titleFontFamily;

    /**
     * @var string
     *
     * @ORM\Column(name="titleFontSize", type="integer", nullable=true)
     */
    private $titleFontSize;

    /**
     * @var string
     *
     * @ORM\Column(name="titleFontStyle", type="string", length=255, nullable=true)
     */
    private $titleFontStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="titleFontColor", type="string", length=255, nullable=true)
     */
    private $titleFontColor;

    /**
     * @var string
     *
     * @ORM\Column(name="titleSpacing", type="string", length=255, nullable=true)
     */
    private $titleSpacing;

    /**
     * @var string
     *
     * @ORM\Column(name="titleMarginBottom", type="integer", nullable=true)
     */
    private $titleMarginBottom;

    /**
     * @var string
     *
     * @ORM\Column(name="bodyFontFamily", type="string", length=255, nullable=true)
     */
    private $bodyFontFamily;

    /**
     * @var string
     *
     * @ORM\Column(name="bodyFontSize", type="integer", nullable=true)
     */
    private $bodyFontSize;

    /**
     * @var string
     *
     * @ORM\Column(name="bodyFontColor", type="string", length=255, nullable=true)
     */
    private $bodyFontColor;

    /**
     * @var string
     *
     * @ORM\Column(name="bodySpacing", type="integer", nullable=true)
     */
    private $bodySpacing;

    /**
     * @var string
     *
     * @ORM\Column(name="footerFontFamily", type="string", length=255, nullable=true)
     */
    private $footerFontFamily;

    /**
     * @var string
     *
     * @ORM\Column(name="footerFontSize", type="integer", nullable=true)
     */
    private $footerFontSize;

    /**
     * @var string
     *
     * @ORM\Column(name="footerFontStyle", type="string", length=255, nullable=true)
     */
    private $footerFontStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="footerFontColor", type="string", length=255, nullable=true)
     */
    private $footerFontColor;

    /**
     * @var string
     *
     * @ORM\Column(name="footerSpacing", type="integer", nullable=true)
     */
    private $footerSpacing;

    /**
     * @var string
     *
     * @ORM\Column(name="footerMarginTop", type="integer", nullable=true)
     */
    private $footerMarginTop;

    /**
     * @var string
     *
     * @ORM\Column(name="xPadding", type="integer", nullable=true)
     */
    private $xPadding;

    /**
     * @var string
     *
     * @ORM\Column(name="yPadding", type="integer", nullable=true)
     */
    private $yPadding;

    /**
     * @var string
     *
     * @ORM\Column(name="caretSize", type="integer", nullable=true)
     */
    private $caretSize;

    /**
     * @var string
     *
     * @ORM\Column(name="cornerRadius", type="integer", nullable=true)
     */
    private $cornerRadius;

    /**
     * @var string
     *
     * @ORM\Column(name="multiKeyBackground", type="string", length=255, nullable=true)
     */
    private $multiKeyBackground;

    /**
     * Set enabled.
     *
     * @param string $enabled
     *
     * @return Tooltips
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled.
     *
     * @return string
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set backgroundColor.
     *
     * @param string $backgroundColor
     *
     * @return Tooltips
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
     * Set titleFontFamily.
     *
     * @param string $titleFontFamily
     *
     * @return Tooltips
     */
    public function setTitleFontFamily($titleFontFamily)
    {
        $this->titleFontFamily = $titleFontFamily;

        return $this;
    }

    /**
     * Get titleFontFamily.
     *
     * @return string
     */
    public function getTitleFontFamily()
    {
        return $this->titleFontFamily;
    }

    /**
     * Set titleFontSize.
     *
     * @param string $titleFontSize
     *
     * @return Tooltips
     */
    public function setTitleFontSize($titleFontSize)
    {
        $this->titleFontSize = $titleFontSize;

        return $this;
    }

    /**
     * Get titleFontSize.
     *
     * @return string
     */
    public function getTitleFontSize()
    {
        return $this->titleFontSize;
    }

    /**
     * Set titleFontStyle.
     *
     * @param string $titleFontStyle
     *
     * @return Tooltips
     */
    public function setTitleFontStyle($titleFontStyle)
    {
        $this->titleFontStyle = $titleFontStyle;

        return $this;
    }

    /**
     * Get titleFontStyle.
     *
     * @return string
     */
    public function getTitleFontStyle()
    {
        return $this->titleFontStyle;
    }

    /**
     * Set titleFontColor.
     *
     * @param string $titleFontColor
     *
     * @return Tooltips
     */
    public function setTitleFontColor($titleFontColor)
    {
        $this->titleFontColor = $titleFontColor;

        return $this;
    }

    /**
     * Get titleFontColor.
     *
     * @return string
     */
    public function getTitleFontColor()
    {
        return $this->titleFontColor;
    }

    /**
     * Set titleSpacing.
     *
     * @param string $titleSpacing
     *
     * @return Tooltips
     */
    public function setTitleSpacing($titleSpacing)
    {
        $this->titleSpacing = $titleSpacing;

        return $this;
    }

    /**
     * Get titleSpacing.
     *
     * @return string
     */
    public function getTitleSpacing()
    {
        return $this->titleSpacing;
    }

    /**
     * Set titleMarginBottom.
     *
     * @param string $titleMarginBottom
     *
     * @return Tooltips
     */
    public function setTitleMarginBottom($titleMarginBottom)
    {
        $this->titleMarginBottom = $titleMarginBottom;

        return $this;
    }

    /**
     * Get titleMarginBottom.
     *
     * @return string
     */
    public function getTitleMarginBottom()
    {
        return $this->titleMarginBottom;
    }

    /**
     * Set bodyFontFamily.
     *
     * @param string $bodyFontFamily
     *
     * @return Tooltips
     */
    public function setBodyFontFamily($bodyFontFamily)
    {
        $this->bodyFontFamily = $bodyFontFamily;

        return $this;
    }

    /**
     * Get bodyFontFamily.
     *
     * @return string
     */
    public function getBodyFontFamily()
    {
        return $this->bodyFontFamily;
    }

    /**
     * Set bodyFontSize.
     *
     * @param string $bodyFontSize
     *
     * @return Tooltips
     */
    public function setBodyFontSize($bodyFontSize)
    {
        $this->bodyFontSize = $bodyFontSize;

        return $this;
    }

    /**
     * Get bodyFontSize.
     *
     * @return string
     */
    public function getBodyFontSize()
    {
        return $this->bodyFontSize;
    }

    /**
     * Set bodyFontColor.
     *
     * @param string $bodyFontColor
     *
     * @return Tooltips
     */
    public function setBodyFontColor($bodyFontColor)
    {
        $this->bodyFontColor = $bodyFontColor;

        return $this;
    }

    /**
     * Get bodyFontColor.
     *
     * @return string
     */
    public function getBodyFontColor()
    {
        return $this->bodyFontColor;
    }

    /**
     * Set bodySpacing.
     *
     * @param string $bodySpacing
     *
     * @return Tooltips
     */
    public function setBodySpacing($bodySpacing)
    {
        $this->bodySpacing = $bodySpacing;

        return $this;
    }

    /**
     * Get bodySpacing.
     *
     * @return string
     */
    public function getBodySpacing()
    {
        return $this->bodySpacing;
    }

    /**
     * Set footerFontFamily.
     *
     * @param string $footerFontFamily
     *
     * @return Tooltips
     */
    public function setFooterFontFamily($footerFontFamily)
    {
        $this->footerFontFamily = $footerFontFamily;

        return $this;
    }

    /**
     * Get footerFontFamily.
     *
     * @return string
     */
    public function getFooterFontFamily()
    {
        return $this->footerFontFamily;
    }

    /**
     * Set footerFontSize.
     *
     * @param string $footerFontSize
     *
     * @return Tooltips
     */
    public function setFooterFontSize($footerFontSize)
    {
        $this->footerFontSize = $footerFontSize;

        return $this;
    }

    /**
     * Get footerFontSize.
     *
     * @return string
     */
    public function getFooterFontSize()
    {
        return $this->footerFontSize;
    }

    /**
     * Set footerFontStyle.
     *
     * @param string $footerFontStyle
     *
     * @return Tooltips
     */
    public function setFooterFontStyle($footerFontStyle)
    {
        $this->footerFontStyle = $footerFontStyle;

        return $this;
    }

    /**
     * Get footerFontStyle.
     *
     * @return string
     */
    public function getFooterFontStyle()
    {
        return $this->footerFontStyle;
    }

    /**
     * Set footerFontColor.
     *
     * @param string $footerFontColor
     *
     * @return Tooltips
     */
    public function setFooterFontColor($footerFontColor)
    {
        $this->footerFontColor = $footerFontColor;

        return $this;
    }

    /**
     * Get footerFontColor.
     *
     * @return string
     */
    public function getFooterFontColor()
    {
        return $this->footerFontColor;
    }

    /**
     * Set footerSpacing.
     *
     * @param string $footerSpacing
     *
     * @return Tooltips
     */
    public function setFooterSpacing($footerSpacing)
    {
        $this->footerSpacing = $footerSpacing;

        return $this;
    }

    /**
     * Get footerSpacing.
     *
     * @return string
     */
    public function getFooterSpacing()
    {
        return $this->footerSpacing;
    }

    /**
     * Set footerMarginTop.
     *
     * @param string $footerMarginTop
     *
     * @return Tooltips
     */
    public function setFooterMarginTop($footerMarginTop)
    {
        $this->footerMarginTop = $footerMarginTop;

        return $this;
    }

    /**
     * Get footerMarginTop.
     *
     * @return string
     */
    public function getFooterMarginTop()
    {
        return $this->footerMarginTop;
    }

    /**
     * Set xPadding.
     *
     * @param string $xPadding
     *
     * @return Tooltips
     */
    public function setXPadding($xPadding)
    {
        $this->xPadding = $xPadding;

        return $this;
    }

    /**
     * Get xPadding.
     *
     * @return string
     */
    public function getXPadding()
    {
        return $this->xPadding;
    }

    /**
     * Set yPadding.
     *
     * @param string $yPadding
     *
     * @return Tooltips
     */
    public function setYPadding($yPadding)
    {
        $this->yPadding = $yPadding;

        return $this;
    }

    /**
     * Get yPadding.
     *
     * @return string
     */
    public function getYPadding()
    {
        return $this->yPadding;
    }

    /**
     * Set caretSize.
     *
     * @param string $caretSize
     *
     * @return Tooltips
     */
    public function setCaretSize($caretSize)
    {
        $this->caretSize = $caretSize;

        return $this;
    }

    /**
     * Get caretSize.
     *
     * @return string
     */
    public function getCaretSize()
    {
        return $this->caretSize;
    }

    /**
     * Set cornerRadius.
     *
     * @param string $cornerRadius
     *
     * @return Tooltips
     */
    public function setCornerRadius($cornerRadius)
    {
        $this->cornerRadius = $cornerRadius;

        return $this;
    }

    /**
     * Get cornerRadius.
     *
     * @return string
     */
    public function getCornerRadius()
    {
        return $this->cornerRadius;
    }

    /**
     * Set multiKeyBackground.
     *
     * @param string $multiKeyBackground
     *
     * @return Tooltips
     */
    public function setMultiKeyBackground($multiKeyBackground)
    {
        $this->multiKeyBackground = $multiKeyBackground;

        return $this;
    }

    /**
     * Get multiKeyBackground.
     *
     * @return string
     */
    public function getMultiKeyBackground()
    {
        return $this->multiKeyBackground;
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
