<?php

namespace OpenDocument\Style\Traits;

trait PageNumberTrait
{
    protected ?string $pageNumber = null;

    /**
     * @return string|null
     */
    public function getPageNumber(): ?string
    {
        return $this->pageNumber;
    }

    public function setPageNumber(?string $pageNumber = null)
    {
        $this->pageNumber = $pageNumber;
    
        return $this;
    }

}
