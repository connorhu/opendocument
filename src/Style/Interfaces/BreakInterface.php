<?php

namespace OpenDocument\Style\Interfaces;

interface BreakInterface
{
    /**
     * @return string|null returns breakBefore
     */
    public function getBreakBefore(): ?string;

    public function setBreakBefore(?string $breakBefore = null);

    /**
     * @return string|null returns breakAfter
     */
    public function getBreakAfter(): ?string;

    public function setBreakAfter(?string $breakAfter = null);

}
