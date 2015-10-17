<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Timeline;

/**
 * @author Christophe Meneses
 */
class Timeline
{
    /**
     * @var BarLabelStyle
     */
    protected $barLabelStyle;

    /**
     * If set to true, colors every bar on the row the same. The default is to use one color per bar label.
     *
     * @var bool
     */
    protected $colorByRowLabel;

    /**
     * If set to false, creates one row for every dataTable entry. The default is to collect bars with the same row
     * label into one row.
     *
     * @var bool
     */
    protected $groupByRowLabel;

    /**
     * @var RowLabelStyle
     */
    protected $rowLabelStyle;

    /**
     * If set to false, omits bar labels. The default is to show them.
     *
     * @var bool
     */
    protected $showBarLabels;

    /**
     * If set to false, omits row labels. The default is to show them.
     *
     * @var bool
     */
    protected $showRowLabels;

    /**
     * Colors all bars the same. Specified as a hex value (e.g., '#8d8').
     *
     * @var string
     */
    protected $singleColor;


    public function __construct()
    {
        $this->barLabelStyle = new BarLabelStyle();
        $this->rowLabelStyle = new RowLabelStyle();
    }


    /**
     * @return BarLabelStyle
     */
    public function getBarLabelStyle()
    {
        return $this->barLabelStyle;
    }

    /**
     * @return RowLabelStyle
     */
    public function getRowLabelStyle()
    {
        return $this->rowLabelStyle;
    }

    /**
     * @param boolean $colorByRowLabel
     */
    public function setColorByRowLabel($colorByRowLabel)
    {
        $this->colorByRowLabel = $colorByRowLabel;
    }

    /**
     * @param boolean $showBarLabels
     */
    public function setShowBarLabels($showBarLabels)
    {
        $this->showBarLabels = $showBarLabels;
    }

    /**
     * @param boolean $showRowLabels
     */
    public function setShowRowLabels($showRowLabels)
    {
        $this->showRowLabels = $showRowLabels;
    }

    /**
     * @param string $singleColor
     */
    public function setSingleColor($singleColor)
    {
        $this->singleColor = $singleColor;
    }

    /**
     * @param boolean $groupByRowLabel
     */
    public function setGroupByRowLabel($groupByRowLabel)
    {
        $this->groupByRowLabel = $groupByRowLabel;
    }
}
