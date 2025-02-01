<?php

namespace OpenDocument\Writer\DocumentParts;

class Manifest extends AbstractDocumentPart
{
    public function write(): string
    {
        $xmlWriter = $this->initXmlWriter();

        $xmlWriter->startElement('manifest:manifest');
        $xmlWriter->writeAttribute('xmlns:manifest', 'urn:oasis:names:tc:opendocument:xmlns:manifest:1.0');
        $xmlWriter->writeAttribute('manifest:version', '1.3');
        $xmlWriter->writeAttribute('xmlns:loext', 'urn:org:documentfoundation:names:experimental:office:xmlns:loext:1.0');

        $xmlWriter->startElement('manifest:file-entry');
        $xmlWriter->writeAttribute('manifest:full-path', '/');
        $xmlWriter->writeAttribute('manifest:version', '1.3');
        $xmlWriter->writeAttribute('manifest:media-type', 'application/vnd.oasis.opendocument.text');
        $xmlWriter->endElement();

        foreach (['content.xml', 'styles.xml'] as $fileEntries) {
            $xmlWriter->startElement('manifest:file-entry');
            $xmlWriter->writeAttribute('manifest:media-type', 'text/xml');
            $xmlWriter->writeAttribute('manifest:full-path', $fileEntries);
            $xmlWriter->endElement();
        }

        $xmlWriter->endElement();

        return $xmlWriter->outputMemory();
    }
}
