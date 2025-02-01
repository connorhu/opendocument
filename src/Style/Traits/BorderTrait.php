<?php

namespace OpenDocument\Style\Traits;

trait BorderTrait
{
    protected $border = null;

    protected $borderTop = null;

    protected $borderBottom = null;

    protected $borderLeft = null;

    protected $borderRight = null;

    /**
     * it returns border
     *
     * @return string|null it returns border
     */
    public function getBorder(): ?string
    {
        return $this->border;
    }

    public function setBorder($border = null)
    {
        $this->border = $border;
    }

    /**
     * it returns borderTop
     *
     * @return string|null it returns borderTop
     */
    public function getBorderTop(): ?string
    {
        return $this->borderTop;
    }

    public function setBorderTop($borderTop = null)
    {
        $this->borderTop = $borderTop;
    }

    /**
     * it returns borderBottom
     *
     * @return string|null it returns borderBottom
     */
    public function getBorderBottom(): ?string
    {
        return $this->borderBottom;
    }

    public function setBorderBottom($borderBottom = null)
    {
        $this->borderBottom = $borderBottom;
    }

    /**
     * it returns borderLeft
     *
     * @return string|null it returns borderLeft
     */
    public function getBorderLeft(): ?string
    {
        return $this->borderLeft;
    }

    public function setBorderLeft($borderLeft = null)
    {
        $this->borderLeft = $borderLeft;
    }

    /**
     * it returns borderRight
     *
     * @return string|null it returns borderRight
     */
    public function getBorderRight(): ?string
    {
        return $this->borderRight;
    }

    public function setBorderRight($borderRight = null)
    {
        $this->borderRight = $borderRight;
    }

}
