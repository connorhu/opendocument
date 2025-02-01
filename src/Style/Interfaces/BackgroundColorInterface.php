<?php

namespace OpenDocument\Style\Interfaces;

interface BackgroundColorInterface
{
    /**
     * @return string|null returns backgroundColor
     */
    public function getBackgroundColor(): ?string;

    public function setBackgroundColor(?string $backgroundColor = null);

}
