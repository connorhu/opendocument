<?php

namespace OpenDocument\Writer\DocumentParts;

class Mimetype extends AbstractDocumentPart
{
    public function write(): string
    {
        return 'application/vnd.oasis.opendocument.text';
    }
}
