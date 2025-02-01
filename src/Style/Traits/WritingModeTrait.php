<?php

namespace OpenDocument\Style\Traits;

trait WritingModeTrait
{
    protected ?string $writingMode = null;

    /**
     * @return string|null
     */
    public function getWritingMode(): ?string
    {
        return $this->writingMode;
    }

    public function setWritingMode(?string $writingMode = null)
    {
        $this->writingMode = $writingMode;
    
        return $this;
    }

}
