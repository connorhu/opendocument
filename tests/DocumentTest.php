<?php

namespace OpenDocument\Tests;

use OpenDocument\Document;
use OpenDocument\Documents\DrawingDocument;
use OpenDocument\Documents\ImageDocument;
use OpenDocument\Documents\TextDocument;
use OpenDocument\Exceptions\RuntimeException;
use PHPUnit\Framework\TestCase;

class DocumentTest extends TestCase
{
    public function testCreate()
    {
        $document = new Document();

        $this->assertInstanceOf(TextDocument::class, $document->createTextDocument());
    }

    public function testClear(): void
    {
        $document = new Document();
        $this->assertInstanceOf(TextDocument::class, $document->createTextDocument());
        $document->clear();
        $this->assertInstanceOf(DrawingDocument::class, $document->createDrawingDocument());
    }

    public function testCreateWOClear(): void
    {
        $this->expectException(RuntimeException::class);

        $document = new Document();
        $this->assertInstanceOf(TextDocument::class, $document->createTextDocument());
        $this->assertInstanceOf(DrawingDocument::class, $document->createDrawingDocument());
    }
}
