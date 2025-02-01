<?php

namespace OpenDocument\Writer\DocumentParts;

use XMLWriter;

class Styles extends AbstractDocumentPart
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
        'xmlns:rpt' => 'http://openoffice.org/2005/report',
        'xmlns:of' => 'urn:oasis:names:tc:opendocument:xmlns:of:1.2',
        'xmlns:xhtml' => 'http://www.w3.org/1999/xhtml',
        'xmlns:grddl' => 'http://www.w3.org/2003/g/data-view#',
        'xmlns:officeooo' => 'http://openoffice.org/2009/office',
        'xmlns:tableooo' => 'http://openoffice.org/2009/table',
        'xmlns:drawooo' => 'http://openoffice.org/2010/draw',
        'xmlns:calcext' => 'urn:org:documentfoundation:names:experimental:calc:xmlns:calcext:1.0',
        'xmlns:loext' => 'urn:org:documentfoundation:names:experimental:office:xmlns:loext:1.0',
        'xmlns:field' => 'urn:openoffice:names:experimental:ooo-ms-interop:xmlns:field:1.0',
        'xmlns:css3t' => 'http://www.w3.org/TR/css3-text/',
        'office:version' => '1.3',
    ];

    public function write(): string
    {
        $xmlWriter = $this->initXmlWriter();

        $xmlWriter->startElement('office:document-styles');

        foreach (self::ROOT_ATTRIBUTES as $attribute => $value) {
            $xmlWriter->writeAttribute($attribute, $value);
        }

        $xmlWriter->startElement('office:font-face-decls');
        $xmlWriter->endElement();

        $xmlWriter->startElement('office:styles');
        $this->writeDefaultParagraphStyle($xmlWriter);
        $xmlWriter->endElement();

        $xmlWriter->endElement();

        return $xmlWriter->outputMemory();
    }

    private function writeDefaultParagraphStyle(XMLWriter $xmlWriter): void
    {
        $xmlWriter->startElement('style:default-style');
        $xmlWriter->writeAttribute('style:family', 'paragraph');

        $xmlWriter->startElement('style:paragraph-properties');

        $defaultParagraphStyleProperties = [
            'fo:orphans' => '2',
            'fo:widows' => '2',
            'fo:hyphenation-ladder-count' => 'no-limit',
            'style:text-autospace' => 'ideograph-alpha',
            'style:punctuation-wrap' => 'hanging',
            'style:line-break' => 'strict',
            'style:tab-stop-distance' => '1.251cm',
            'style:writing-mode' => 'page',
        ];
        foreach ($defaultParagraphStyleProperties as $property => $value) {
            $xmlWriter->writeAttribute($property, $value);
        }
        
        $xmlWriter->endElement();

        $xmlWriter->startElement('style:text-properties');

        $defaultTextStyleProperties = [
            'style:use-window-font-color' => 'true',
            'style:font-name' => 'Liberation Serif',
            'fo:font-size' => '12pt',
            'fo:language' => 'en',
            'fo:country' => 'US',
            'style:letter-kerning' => 'true',
            'style:font-name-asian' => 'Songti SC',
            'style:font-size-asian' => '10.5pt',
            'style:language-asian' => 'zh',
            'style:country-asian' => 'CN',
            'style:font-name-complex' => 'Arial Unicode MS',
            'style:font-size-complex' => '12pt',
            'style:language-complex' => 'hi',
            'style:country-complex' => 'IN',
            'fo:hyphenate' => 'false',
            'fo:hyphenation-remain-char-count' => '2',
            'fo:hyphenation-push-char-count' => '2',
        ];
        foreach ($defaultTextStyleProperties as $property => $value) {
            $xmlWriter->writeAttribute($property, $value);
        }

        $xmlWriter->endElement();

        $xmlWriter->endElement();
    }
}
