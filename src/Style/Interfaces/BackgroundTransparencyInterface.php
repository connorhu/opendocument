<?php

namespace OpenDocument\Style\Interfaces;

interface BackgroundTransparencyInterface
{
    /**
     * @return string|null returns backgroundTransparency
     */
    public function getBackgroundTransparency(): ?string;

    public function setBackgroundTransparency(?string $backgroundTransparency = null);

}
