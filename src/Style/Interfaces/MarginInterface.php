<?php

namespace OpenDocument\Style\Interfaces;

interface MarginInterface
{
    /**
     * @return string|null returns margin
     */
    public function getMargin(): ?string;

    public function setMargin(?string $margin = null);

}
