<?php

namespace OpenDocument\Writer\DocumentParts;

use OpenDocument\Documents\ChartDocument;
use OpenDocument\Documents\DatabaseDocument;
use OpenDocument\Documents\DrawingDocument;
use OpenDocument\Documents\ImageDocument;
use OpenDocument\Documents\PresentationDocument;
use OpenDocument\Documents\SpreadsheetDocument;
use OpenDocument\Documents\TextDocument;

class Content extends AbstractDocumentPart
{
    private const array ROOT_ATTRIBUTES = [
        'xmlns:office' => 'urn:oasis:names:tc:opendocument:xmlns:office:1.0',
        'xmlns:style' => 'urn:oasis:names:tc:opendocument:xmlns:style:1.0',
        'xmlns:text' => 'urn:oasis:names:tc:opendocument:xmlns:text:1.0',
        'xmlns:table' => 'urn:oasis:names:tc:opendocument:xmlns:table:1.0',
        'xmlns:draw' => 'urn:oasis:names:tc:opendocument:xmlns:drawing:1.0',
        'xmlns:fo' => 'urn:oasis:names:tc:opendocument:xmlns:xsl-fo-compatible:1.0',
        'xmlns:xlink' => 'http://www.w3.org/1999/xlink',
        'xmlns:dc' => 'http://purl.org/dc/elements/1.1/',
        'xmlns:meta' => 'urn:oasis:names:tc:opendocument:xmlns:meta:1.0',
        'xmlns:number' => 'urn:oasis:names:tc:opendocument:xmlns:datastyle:1.0',
        'xmlns:svg' => 'urn:oasis:names:tc:opendocument:xmlns:svg-compatible:1.0',
        'xmlns:chart' => 'urn:oasis:names:tc:opendocument:xmlns:chart:1.0',
        'xmlns:dr3d' => 'urn:oasis:names:tc:opendocument:xmlns:dr3d:1.0',
        'xmlns:math' => 'http://www.w3.org/1998/Math/MathML',
        'xmlns:form' => 'urn:oasis:names:tc:opendocument:xmlns:form:1.0',
        'xmlns:script' => 'urn:oasis:names:tc:opendocument:xmlns:script:1.0',
        'xmlns:ooo' => 'http://openoffice.org/2004/office',
        'xmlns:ooow' => 'http://openoffice.org/2004/writer',
        'xmlns:oooc' => 'http://openoffice.org/2004/calc',
        'xmlns:dom' => 'http://www.w3.org/2001/xml-events',
        'xmlns:xforms' => 'http://www.w3.org/2002/xforms',
        'xmlns:xsd' => 'http://www.w3.org/2001/XMLSchema',
        'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
        'xmlns:rpt' => 'http://openoffice.org/2005/report',
        'xmlns:of' => 'urn:oasis:names:tc:opendocument:xmlns:of:1.3',
        'xmlns:xhtml' => 'http://www.w3.org/1999/xhtml',
        'xmlns:grddl' => 'http://www.w3.org/2003/g/data-view#',
        'xmlns:officeooo' => 'http://openoffice.org/2009/office',
        'xmlns:tableooo' => 'http://openoffice.org/2009/table',
        'xmlns:drawooo' => 'http://openoffice.org/2010/draw',
        'xmlns:calcext' => 'urn:org:documentfoundation:names:experimental:calc:xmlns:calcext:1.0',
        'xmlns:loext' => 'urn:org:documentfoundation:names:experimental:office:xmlns:loext:1.0',
        'xmlns:field' => 'urn:openoffice:names:experimental:ooo-ms-interop:xmlns:field:1.0',
        'xmlns:formx' => 'urn:openoffice:names:experimental:ooxml-odf-interop:xmlns:form:1.0',
        'xmlns:css3t' => 'http://www.w3.org/TR/css3-text/',
        'office:version' => '1.3',
    ];

    public function write(): string
    {
        $document = $this->getWriter()->getDocument();
        $xmlWriter = $this->initXmlWriter();

        $xmlWriter->startElement('office:document-content');

        foreach (self::ROOT_ATTRIBUTES as $attribute => $value) {
            $xmlWriter->writeAttribute($attribute, $value);
        }

        $xmlWriter->startElement('office:scripts');
        $xmlWriter->endElement();

        $xmlWriter->startElement('office:font-face-decls');
        $xmlWriter->endElement();

        $xmlWriter->startElement('office:automatic-styles');
        $xmlWriter->endElement();

        $xmlWriter->startElement('office:body');

        // text csak akkor ha  doc text doc
        $rootDocument = $document->getRootDocument();
        if ($rootDocument instanceof TextDocument) {
            $xmlWriter->startElement('office:text');
        } elseif ($rootDocument instanceof ChartDocument) {
            $xmlWriter->startElement('office:chart');
        } elseif ($rootDocument instanceof DatabaseDocument) {
            $xmlWriter->startElement('office:database');
        } elseif ($rootDocument instanceof DrawingDocument) {
            $xmlWriter->startElement('office:drawing');
        } elseif ($rootDocument instanceof ImageDocument) {
            $xmlWriter->startElement('office:image');
        } elseif ($rootDocument instanceof PresentationDocument) {
            $xmlWriter->startElement('office:presentation');
        } elseif ($rootDocument instanceof SpreadsheetDocument) {
            $xmlWriter->startElement('office:spreadsheet');
        }

        $xmlWriter->endElement(); // office:text, chart, ...
        $xmlWriter->endElement(); // office:body
        $xmlWriter->endElement(); // office:document-content

        return $xmlWriter->outputMemory();
    }
}
