<?php

namespace OpenDocument\Style\Interfaces;

interface TextAlignInterface
{
    /**
     * @return string|null returns textAlign
     */
    public function getTextAlign(): ?string;

    public function setTextAlign(?string $textAlign = null);

}
