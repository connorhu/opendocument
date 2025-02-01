<?php

namespace OpenDocument\Style\Traits;

trait HorizontalMarginTrait
{
    protected ?string $marginLeft = null;

    protected ?string $marginRight = null;

    /**
     * @return string|null
     */
    public function getMarginLeft(): ?string
    {
        return $this->marginLeft;
    }

    public function setMarginLeft(?string $marginLeft = null)
    {
        $this->marginLeft = $marginLeft;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMarginRight(): ?string
    {
        return $this->marginRight;
    }

    public function setMarginRight(?string $marginRight = null)
    {
        $this->marginRight = $marginRight;
    
        return $this;
    }

}
