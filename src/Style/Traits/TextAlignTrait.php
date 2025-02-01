<?php

namespace OpenDocument\Style\Traits;

trait TextAlignTrait
{
    protected ?string $textAlign = null;

    /**
     * @return string|null
     */
    public function getTextAlign(): ?string
    {
        return $this->textAlign;
    }

    public function setTextAlign(?string $textAlign = null)
    {
        $this->textAlign = $textAlign;
    
        return $this;
    }

}
