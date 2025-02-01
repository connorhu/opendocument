<?php

namespace OpenDocument\Style\Traits;

trait KeepWithNextTrait
{
    protected ?string $keepWithNext = null;

    /**
     * @return string|null
     */
    public function getKeepWithNext(): ?string
    {
        return $this->keepWithNext;
    }

    public function setKeepWithNext(?string $keepWithNext = null)
    {
        $this->keepWithNext = $keepWithNext;
    
        return $this;
    }

}
