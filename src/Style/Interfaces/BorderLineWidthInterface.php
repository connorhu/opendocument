<?php

namespace OpenDocument\Style\Interfaces;

interface BorderLineWidthInterface
{
    /**
     * @return string|null returns borderLineWidth
     */
    public function getBorderLineWidth(): ?string;

    public function setBorderLineWidth(?string $borderLineWidth = null);

    /**
     * @return string|null returns borderLineWidthTop
     */
    public function getBorderLineWidthTop(): ?string;

    public function setBorderLineWidthTop(?string $borderLineWidthTop = null);

    /**
     * @return string|null returns borderLineWidthBottom
     */
    public function getBorderLineWidthBottom(): ?string;

    public function setBorderLineWidthBottom(?string $borderLineWidthBottom = null);

    /**
     * @return string|null returns borderLineWidthLeft
     */
    public function getBorderLineWidthLeft(): ?string;

    public function setBorderLineWidthLeft(?string $borderLineWidthLeft = null);

    /**
     * @return string|null returns borderLineWidthRight
     */
    public function getBorderLineWidthRight(): ?string;

    public function setBorderLineWidthRight(?string $borderLineWidthRight = null);

}
