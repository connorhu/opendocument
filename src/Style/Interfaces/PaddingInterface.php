<?php

namespace OpenDocument\Style\Interfaces;

interface PaddingInterface
{
    /**
     * @return string|null returns padding
     */
    public function getPadding(): ?string;

    public function setPadding(?string $padding = null);

    /**
     * @return string|null returns paddingTop
     */
    public function getPaddingTop(): ?string;

    public function setPaddingTop(?string $paddingTop = null);

    /**
     * @return string|null returns paddingBottom
     */
    public function getPaddingBottom(): ?string;

    public function setPaddingBottom(?string $paddingBottom = null);

    /**
     * @return string|null returns paddingLeft
     */
    public function getPaddingLeft(): ?string;

    public function setPaddingLeft(?string $paddingLeft = null);

    /**
     * @return string|null returns paddingRight
     */
    public function getPaddingRight(): ?string;

    public function setPaddingRight(?string $paddingRight = null);

}
