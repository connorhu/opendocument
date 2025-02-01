<?php

namespace OpenDocument\Writer\DocumentParts;

use OpenDocument\Writer\Writer;
use XMLWriter;

abstract class AbstractDocumentPart
{
    abstract public function write(): string;

    public function __construct(
        private readonly Writer $writer,
    ) {
    }

    /**
     * @return Writer
     */
    public function getWriter(): Writer
    {
        return $this->writer;
    }

    public function initXmlWriter(): XmlWriter
    {
        $xmlWriter = new \XMLWriter();

        $xmlWriter->openMemory();

        $xmlWriter->setIndent(true);
        $xmlWriter->setIndentString("\t");
        $xmlWriter->startDocument(Writer::XML_VERSION, Writer::XML_ENCODING);

        return $xmlWriter;
    }
}
