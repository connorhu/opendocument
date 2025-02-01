<?php

namespace OpenDocument\Style\Interfaces;

interface HorizontalMarginInterface
{
    /**
     * @return string|null returns marginLeft
     */
    public function getMarginLeft(): ?string;

    public function setMarginLeft(?string $marginLeft = null);

    /**
     * @return string|null returns marginRight
     */
    public function getMarginRight(): ?string;

    public function setMarginRight(?string $marginRight = null);

}
