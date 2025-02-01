<?php

namespace OpenDocument\Style;

/**
 * @see https://docs.oasis-open.org/office/OpenDocument/v1.3/os/part3-schema/OpenDocument-v1.3-os-part3-schema.html#element-style_paragraph-properties
 */
class ParagraphStyle extends Style implements
    Interfaces\BackgroundColorInterface,
    Interfaces\BackgroundTransparencyInterface,
    Interfaces\BorderLineWidthInterface,
    Interfaces\BorderInterface,
    Interfaces\BreakInterface,
    Interfaces\HorizontalMarginInterface,
    Interfaces\KeepWithNextInterface,
    Interfaces\MarginInterface,
    Interfaces\PaddingInterface,
    Interfaces\PageNumberInterface,
    Interfaces\ShadowInterface,
    Interfaces\TextAlignInterface,
    Interfaces\VerticalMarginInterface,
    Interfaces\WritingModeInterface
{
    use Traits\BackgroundColorTrait;
    use Traits\BackgroundTransparencyTrait;
    use Traits\BorderLineWidthTrait;
    use Traits\BorderTrait;
    use Traits\BreakTrait;
    use Traits\HorizontalMarginTrait;
    use Traits\KeepWithNextTrait;
    use Traits\MarginTrait;
    use Traits\PaddingTrait;
    use Traits\PageNumberTrait;
    use Traits\ShadowTrait;
    use Traits\TextAlignTrait;
    use Traits\VerticalMarginTrait;
    use Traits\WritingModeTrait;
}
