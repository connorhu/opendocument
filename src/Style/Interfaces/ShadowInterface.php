<?php

namespace OpenDocument\Style\Interfaces;

interface ShadowInterface
{
    /**
     * @return string|null returns shadow
     */
    public function getShadow(): ?string;

    public function setShadow(?string $shadow = null);

}
