<?php

namespace OpenDocument\Style;
/*
 * chart: family name of styles for charts.
 * •drawing-page: family name of styles for drawing pages.
 * •graphic: family name of styles for graphic elements.
 * •paragraph: family name of styles for paragraphs.
 * •presentation: family name of styles for presentations.
 * •ruby: family name of styles for ruby text.
 * •table: family name of styles for tables.
 * •table-cell: family name of styles for table cells.
 * •table-column: family name of styles for table columns.
 * •table-row: family name of styles for table rows.
 * •text: family name of styles for text.
 */

class Style
{
    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    protected Style $parentStyle = null;

    /**
     * @return Style|null
     */
    public function getParentStyle(): ?Style
    {
        return $this->parentStyle;
    }

    /**
     * @param Style|null $parentStyle
     */
    public function setParentStyle(?Style $parentStyle): void
    {
        $this->parentStyle = $parentStyle;
    }
}
