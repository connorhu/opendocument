<?php

namespace OpenDocument\Style\Traits;

trait BackgroundColorTrait
{
    protected ?string $backgroundColor = null;

    /**
     * @return string|null
     */
    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor(?string $backgroundColor = null)
    {
        $this->backgroundColor = $backgroundColor;
    
        return $this;
    }

}
