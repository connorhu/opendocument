<?php

namespace OpenDocument;

use OpenDocument\Documents\ChartDocument;
use OpenDocument\Documents\DatabaseDocument;
use OpenDocument\Documents\DrawingDocument;
use OpenDocument\Documents\ImageDocument;
use OpenDocument\Documents\OpenDocumentInterface;
use OpenDocument\Documents\PresentationDocument;
use OpenDocument\Documents\SpreadsheetDocument;
use OpenDocument\Documents\TextDocument;
use OpenDocument\Exceptions\RuntimeException;

class Document
{
    private OpenDocumentInterface $rootDocument;

    /**
     * @return OpenDocumentInterface
     */
    public function getRootDocument(): OpenDocumentInterface
    {
        return $this->rootDocument;
    }

    protected function setRootDocument(OpenDocumentInterface $document): void
    {
        if (isset($this->rootDocument)) {
            throw new RuntimeException('Cant create a document.');
        }

        $this->rootDocument = $document;
    }

    public function createChartDocument(): ChartDocument
    {
        $this->setRootDocument($document = new ChartDocument($this));

        return $document;
    }

    public function createDatabaseDocument(): DatabaseDocument
    {
        $this->setRootDocument($document = new DatabaseDocument($this));

        return $document;
    }

    public function createDrawingDocument(): DrawingDocument
    {
        $this->setRootDocument($document = new DrawingDocument($this));

        return $document;
    }

    public function createImageDocument(): ImageDocument
    {
        $this->setRootDocument($document = new ImageDocument($this));

        return $document;
    }

    public function createPresentationDocument(): PresentationDocument
    {
        $this->setRootDocument($document = new PresentationDocument($this));

        return $document;
    }

    public function createSpreadsheetDocument(): SpreadsheetDocument
    {
        $this->setRootDocument($document = new SpreadsheetDocument($this));

        return $document;
    }

    public function createTextDocument(): TextDocument
    {
        $this->setRootDocument($document = new TextDocument($this));

        return $document;
    }

    public function clear(): void
    {
        unset($this->rootDocument);
    }
}
