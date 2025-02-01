<?php

namespace OpenDocument\Style\Interfaces;

interface KeepWithNextInterface
{
    /**
     * @return string|null returns keepWithNext
     */
    public function getKeepWithNext(): ?string;

    public function setKeepWithNext(?string $keepWithNext = null);

}
