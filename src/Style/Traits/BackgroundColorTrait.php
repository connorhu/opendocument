<?php

namespace src\Style\Traits;

trait BackgroundColorTrait
{
    protected $backgroundColor = null;

    /**
     * it returns backgroundColor
     *
     * @return string|null it returns backgroundColor
     */
    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor($backgroundColor = null)
    {
        $this->backgroundColor = $backgroundColor;
    }

}
