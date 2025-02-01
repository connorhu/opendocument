<?php

namespace OpenDocument\Writer;

use OpenDocument\Document;

class Writer
{
    public const string XML_VERSION = '1.0';
    public const string XML_ENCODING = 'UTF-8';

    public function __construct(private readonly Document $document)
    {

    }

    public function save(string $path): void
    {
        /*if (is_file($path)) {
            throw new \Exception("File already exists.");
        }*/

        $documentParts = [
            'mimetype' => DocumentParts\Mimetype::class,
            'content.xml' => DocumentParts\Content::class,
            'styles.xml' => DocumentParts\Styles::class,
            'META-INF/manifest.xml' => DocumentParts\Manifest::class,
        ];

        $zip = new \ZipArchive;
        $zip->open($path,\ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        foreach ($documentParts as $filename => $class) {
            $object = new $class($this);

            assert($object instanceof DocumentParts\AbstractDocumentPart);

            $zip->addFromString($filename, $object->write());
        }

        $zip->close();
    }

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }
}
