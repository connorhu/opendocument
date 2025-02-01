<?php

namespace src\Style\Interfaces;

interface BorderInterface
{
    /**
     * it returns border
     *
     * @return string|null it returns border
     */
    public function getBorder(): ?string;

    public function setBorder($border = null);

    /**
     * it returns borderTop
     *
     * @return string|null it returns borderTop
     */
    public function getBorderTop(): ?string;

    public function setBorderTop($borderTop = null);

    /**
     * it returns borderBottom
     *
     * @return string|null it returns borderBottom
     */
    public function getBorderBottom(): ?string;

    public function setBorderBottom($borderBottom = null);

    /**
     * it returns borderLeft
     *
     * @return string|null it returns borderLeft
     */
    public function getBorderLeft(): ?string;

    public function setBorderLeft($borderLeft = null);

    /**
     * it returns borderRight
     *
     * @return string|null it returns borderRight
     */
    public function getBorderRight(): ?string;

    public function setBorderRight($borderRight = null);

}
