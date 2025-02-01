<?php

namespace OpenDocument\Style\Interfaces;

interface VerticalMarginInterface
{
    /**
     * @return string|null returns marginTop
     */
    public function getMarginTop(): ?string;

    public function setMarginTop(?string $marginTop = null);

    /**
     * @return string|null returns marginBottom
     */
    public function getMarginBottom(): ?string;

    public function setMarginBottom(?string $marginBottom = null);

}
