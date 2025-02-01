<?php

namespace OpenDocument\Style\Traits;

trait BorderTrait
{
    protected ?string $border = null;

    protected ?string $borderTop = null;

    protected ?string $borderBottom = null;

    protected ?string $borderLeft = null;

    protected ?string $borderRight = null;

    /**
     * @return string|null
     */
    public function getBorder(): ?string
    {
        return $this->border;
    }

    public function setBorder(?string $border = null)
    {
        $this->border = $border;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBorderTop(): ?string
    {
        return $this->borderTop;
    }

    public function setBorderTop(?string $borderTop = null)
    {
        $this->borderTop = $borderTop;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBorderBottom(): ?string
    {
        return $this->borderBottom;
    }

    public function setBorderBottom(?string $borderBottom = null)
    {
        $this->borderBottom = $borderBottom;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBorderLeft(): ?string
    {
        return $this->borderLeft;
    }

    public function setBorderLeft(?string $borderLeft = null)
    {
        $this->borderLeft = $borderLeft;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBorderRight(): ?string
    {
        return $this->borderRight;
    }

    public function setBorderRight(?string $borderRight = null)
    {
        $this->borderRight = $borderRight;
    
        return $this;
    }

}
