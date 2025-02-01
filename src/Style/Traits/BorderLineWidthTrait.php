<?php

namespace OpenDocument\Style\Traits;

trait BorderLineWidthTrait
{
    protected ?string $borderLineWidth = null;

    protected ?string $borderLineWidthTop = null;

    protected ?string $borderLineWidthBottom = null;

    protected ?string $borderLineWidthLeft = null;

    protected ?string $borderLineWidthRight = null;

    /**
     * @return string|null
     */
    public function getBorderLineWidth(): ?string
    {
        return $this->borderLineWidth;
    }

    public function setBorderLineWidth(?string $borderLineWidth = null)
    {
        $this->borderLineWidth = $borderLineWidth;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBorderLineWidthTop(): ?string
    {
        return $this->borderLineWidthTop;
    }

    public function setBorderLineWidthTop(?string $borderLineWidthTop = null)
    {
        $this->borderLineWidthTop = $borderLineWidthTop;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBorderLineWidthBottom(): ?string
    {
        return $this->borderLineWidthBottom;
    }

    public function setBorderLineWidthBottom(?string $borderLineWidthBottom = null)
    {
        $this->borderLineWidthBottom = $borderLineWidthBottom;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBorderLineWidthLeft(): ?string
    {
        return $this->borderLineWidthLeft;
    }

    public function setBorderLineWidthLeft(?string $borderLineWidthLeft = null)
    {
        $this->borderLineWidthLeft = $borderLineWidthLeft;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBorderLineWidthRight(): ?string
    {
        return $this->borderLineWidthRight;
    }

    public function setBorderLineWidthRight(?string $borderLineWidthRight = null)
    {
        $this->borderLineWidthRight = $borderLineWidthRight;
    
        return $this;
    }

}
