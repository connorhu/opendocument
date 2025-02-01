<?php

namespace OpenDocument\Style\Traits;

trait MarginTrait
{
    protected ?string $margin = null;

    /**
     * @return string|null
     */
    public function getMargin(): ?string
    {
        return $this->margin;
    }

    public function setMargin(?string $margin = null)
    {
        $this->margin = $margin;
    
        return $this;
    }

}
