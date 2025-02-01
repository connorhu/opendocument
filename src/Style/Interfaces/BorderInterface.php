<?php

namespace OpenDocument\Style\Interfaces;

interface BorderInterface
{
    /**
     * @return string|null returns border
     */
    public function getBorder(): ?string;

    public function setBorder(?string $border = null);

    /**
     * @return string|null returns borderTop
     */
    public function getBorderTop(): ?string;

    public function setBorderTop(?string $borderTop = null);

    /**
     * @return string|null returns borderBottom
     */
    public function getBorderBottom(): ?string;

    public function setBorderBottom(?string $borderBottom = null);

    /**
     * @return string|null returns borderLeft
     */
    public function getBorderLeft(): ?string;

    public function setBorderLeft(?string $borderLeft = null);

    /**
     * @return string|null returns borderRight
     */
    public function getBorderRight(): ?string;

    public function setBorderRight(?string $borderRight = null);

}
