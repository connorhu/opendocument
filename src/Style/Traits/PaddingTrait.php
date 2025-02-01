<?php

namespace OpenDocument\Style\Traits;

trait PaddingTrait
{
    protected ?string $padding = null;

    protected ?string $paddingTop = null;

    protected ?string $paddingBottom = null;

    protected ?string $paddingLeft = null;

    protected ?string $paddingRight = null;

    /**
     * @return string|null
     */
    public function getPadding(): ?string
    {
        return $this->padding;
    }

    public function setPadding(?string $padding = null)
    {
        $this->padding = $padding;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaddingTop(): ?string
    {
        return $this->paddingTop;
    }

    public function setPaddingTop(?string $paddingTop = null)
    {
        $this->paddingTop = $paddingTop;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaddingBottom(): ?string
    {
        return $this->paddingBottom;
    }

    public function setPaddingBottom(?string $paddingBottom = null)
    {
        $this->paddingBottom = $paddingBottom;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaddingLeft(): ?string
    {
        return $this->paddingLeft;
    }

    public function setPaddingLeft(?string $paddingLeft = null)
    {
        $this->paddingLeft = $paddingLeft;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaddingRight(): ?string
    {
        return $this->paddingRight;
    }

    public function setPaddingRight(?string $paddingRight = null)
    {
        $this->paddingRight = $paddingRight;
    
        return $this;
    }

}
