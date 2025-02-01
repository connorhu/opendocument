<?php

namespace OpenDocument\Style\Traits;

trait ShadowTrait
{
    protected ?string $shadow = null;

    /**
     * @return string|null
     */
    public function getShadow(): ?string
    {
        return $this->shadow;
    }

    public function setShadow(?string $shadow = null)
    {
        $this->shadow = $shadow;
    
        return $this;
    }

}
