<?php

namespace OpenDocument\Style\Traits;

trait BorderTrait
{
    protected $border = null;

    protected $borderTop = null;

    protected $borderBottom = null;

    protected $borderLeft = null;

    protected $borderRight = null;

    public function getBorder()
    {
        return $this->border;
    }

    public function setBorder($border = null)
    {
        $this->border = $border;
    }

    public function getBorderTop()
    {
        return $this->borderTop;
    }

    public function setBorderTop($borderTop = null)
    {
        $this->borderTop = $borderTop;
    }

    public function getBorderBottom()
    {
        return $this->borderBottom;
    }

    public function setBorderBottom($borderBottom = null)
    {
        $this->borderBottom = $borderBottom;
    }

    public function getBorderLeft()
    {
        return $this->borderLeft;
    }

    public function setBorderLeft($borderLeft = null)
    {
        $this->borderLeft = $borderLeft;
    }

    public function getBorderRight()
    {
        return $this->borderRight;
    }

    public function setBorderRight($borderRight = null)
    {
        $this->borderRight = $borderRight;
    }

}
