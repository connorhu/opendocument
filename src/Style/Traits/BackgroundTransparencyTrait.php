<?php

namespace OpenDocument\Style\Traits;

trait BackgroundTransparencyTrait
{
    protected ?string $backgroundTransparency = null;

    /**
     * @return string|null
     */
    public function getBackgroundTransparency(): ?string
    {
        return $this->backgroundTransparency;
    }

    public function setBackgroundTransparency(?string $backgroundTransparency = null)
    {
        $this->backgroundTransparency = $backgroundTransparency;
    
        return $this;
    }

}
