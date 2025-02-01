<?php

namespace OpenDocument\Style\Interfaces;

interface PageNumberInterface
{
    /**
     * @return string|null returns pageNumber
     */
    public function getPageNumber(): ?string;

    public function setPageNumber(?string $pageNumber = null);

}
