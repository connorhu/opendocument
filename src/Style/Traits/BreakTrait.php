<?php

namespace OpenDocument\Style\Traits;

trait BreakTrait
{
    protected ?string $breakBefore = null;

    protected ?string $breakAfter = null;

    /**
     * @return string|null
     */
    public function getBreakBefore(): ?string
    {
        return $this->breakBefore;
    }

    public function setBreakBefore(?string $breakBefore = null)
    {
        $this->breakBefore = $breakBefore;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBreakAfter(): ?string
    {
        return $this->breakAfter;
    }

    public function setBreakAfter(?string $breakAfter = null)
    {
        $this->breakAfter = $breakAfter;
    
        return $this;
    }

}
