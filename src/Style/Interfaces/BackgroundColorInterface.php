<?php

namespace src\Style\Interfaces;

interface BackgroundColorInterface
{
    /**
     * it returns backgroundColor
     *
     * @return string|null it returns backgroundColor
     */
    public function getBackgroundColor(): ?string;

    public function setBackgroundColor($backgroundColor = null);

}
