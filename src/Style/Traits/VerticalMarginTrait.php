<?php

namespace OpenDocument\Style\Traits;

trait VerticalMarginTrait
{
    protected ?string $marginTop = null;

    protected ?string $marginBottom = null;

    /**
     * @return string|null
     */
    public function getMarginTop(): ?string
    {
        return $this->marginTop;
    }

    public function setMarginTop(?string $marginTop = null)
    {
        $this->marginTop = $marginTop;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMarginBottom(): ?string
    {
        return $this->marginBottom;
    }

    public function setMarginBottom(?string $marginBottom = null)
    {
        $this->marginBottom = $marginBottom;
    
        return $this;
    }

}
