<?php

namespace OpenDocument\Style\Traits;

trait BackgroundColorTrait
{
    protected $backgroundColor = null;

    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor($backgroundColor = null)
    {
        $this->backgroundColor = $backgroundColor;
    }

}
