<?php

namespace OpenDocument\Style\Interfaces;

interface WritingModeInterface
{
    /**
     * @return string|null returns writingMode
     */
    public function getWritingMode(): ?string;

    public function setWritingMode(?string $writingMode = null);

}
