<?php

namespace OpenDocument\Style;

/**
 * @see https://docs.oasis-open.org/office/OpenDocument/v1.3/os/part3-schema/OpenDocument-v1.3-os-part3-schema.html
 */
class ParagraphStyle extends Style implements
    Interfaces\BackgroundColorInterface,
    Interfaces\BackgroundTransparencyInterface,
    Interfaces\BorderInterface,
    Interfaces\BorderLineWidthInterface,
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

    protected ?bool $contextualSpacing = null;

    protected ?string $lineHeight = null;

    protected ?string $lineHeightAtLeast = null;

    protected ?string $lineSpacing = null;

    protected ?bool $fontIndependentLineSpacing = null;

    protected ?string $textAlignLast = null;

    protected ?bool $justifySingleWord = null;

    protected ?string $keepTogether = null;

    protected ?string $widows = null;

    protected ?string $orphans = null;

    protected ?string $tabStopDistance = null;

    protected ?string $hyphenationKeep = null;

    protected ?string $hyphenationLadderCount = null;

    protected ?bool $registerTrue = null;

    protected ?string $textIndent = null;

    protected ?bool $autoTextIndent = null;

    protected ?bool $joinBorder = null;

    protected ?bool $numberLines = null;

    protected ?string $lineNumber = null;

    protected ?string $textAutospace = null;

    protected ?string $punctuationWrap = null;

    protected ?string $lineBreak = null;

    protected ?string $verticalAlign = null;

    protected ?bool $writingModeAutomatic = null;

    protected ?bool $snapToLayoutGrid = null;

    /**
     * @return bool|null
     */
    public function getContextualSpacing(): ?bool
    {
        return $this->contextualSpacing;
    }

    public function setContextualSpacing(?bool $contextualSpacing = null)
    {
        $this->contextualSpacing = $contextualSpacing;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLineHeight(): ?string
    {
        return $this->lineHeight;
    }

    public function setLineHeight(?string $lineHeight = null)
    {
        $this->lineHeight = $lineHeight;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLineHeightAtLeast(): ?string
    {
        return $this->lineHeightAtLeast;
    }

    public function setLineHeightAtLeast(?string $lineHeightAtLeast = null)
    {
        $this->lineHeightAtLeast = $lineHeightAtLeast;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLineSpacing(): ?string
    {
        return $this->lineSpacing;
    }

    public function setLineSpacing(?string $lineSpacing = null)
    {
        $this->lineSpacing = $lineSpacing;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getFontIndependentLineSpacing(): ?bool
    {
        return $this->fontIndependentLineSpacing;
    }

    public function setFontIndependentLineSpacing(?bool $fontIndependentLineSpacing = null)
    {
        $this->fontIndependentLineSpacing = $fontIndependentLineSpacing;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextAlignLast(): ?string
    {
        return $this->textAlignLast;
    }

    public function setTextAlignLast(?string $textAlignLast = null)
    {
        $this->textAlignLast = $textAlignLast;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getJustifySingleWord(): ?bool
    {
        return $this->justifySingleWord;
    }

    public function setJustifySingleWord(?bool $justifySingleWord = null)
    {
        $this->justifySingleWord = $justifySingleWord;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKeepTogether(): ?string
    {
        return $this->keepTogether;
    }

    public function setKeepTogether(?string $keepTogether = null)
    {
        $this->keepTogether = $keepTogether;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWidows(): ?string
    {
        return $this->widows;
    }

    public function setWidows(?string $widows = null)
    {
        $this->widows = $widows;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrphans(): ?string
    {
        return $this->orphans;
    }

    public function setOrphans(?string $orphans = null)
    {
        $this->orphans = $orphans;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTabStopDistance(): ?string
    {
        return $this->tabStopDistance;
    }

    public function setTabStopDistance(?string $tabStopDistance = null)
    {
        $this->tabStopDistance = $tabStopDistance;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHyphenationKeep(): ?string
    {
        return $this->hyphenationKeep;
    }

    public function setHyphenationKeep(?string $hyphenationKeep = null)
    {
        $this->hyphenationKeep = $hyphenationKeep;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHyphenationLadderCount(): ?string
    {
        return $this->hyphenationLadderCount;
    }

    public function setHyphenationLadderCount(?string $hyphenationLadderCount = null)
    {
        $this->hyphenationLadderCount = $hyphenationLadderCount;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRegisterTrue(): ?bool
    {
        return $this->registerTrue;
    }

    public function setRegisterTrue(?bool $registerTrue = null)
    {
        $this->registerTrue = $registerTrue;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextIndent(): ?string
    {
        return $this->textIndent;
    }

    public function setTextIndent(?string $textIndent = null)
    {
        $this->textIndent = $textIndent;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAutoTextIndent(): ?bool
    {
        return $this->autoTextIndent;
    }

    public function setAutoTextIndent(?bool $autoTextIndent = null)
    {
        $this->autoTextIndent = $autoTextIndent;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getJoinBorder(): ?bool
    {
        return $this->joinBorder;
    }

    public function setJoinBorder(?bool $joinBorder = null)
    {
        $this->joinBorder = $joinBorder;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getNumberLines(): ?bool
    {
        return $this->numberLines;
    }

    public function setNumberLines(?bool $numberLines = null)
    {
        $this->numberLines = $numberLines;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLineNumber(): ?string
    {
        return $this->lineNumber;
    }

    public function setLineNumber(?string $lineNumber = null)
    {
        $this->lineNumber = $lineNumber;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextAutospace(): ?string
    {
        return $this->textAutospace;
    }

    public function setTextAutospace(?string $textAutospace = null)
    {
        $this->textAutospace = $textAutospace;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPunctuationWrap(): ?string
    {
        return $this->punctuationWrap;
    }

    public function setPunctuationWrap(?string $punctuationWrap = null)
    {
        $this->punctuationWrap = $punctuationWrap;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLineBreak(): ?string
    {
        return $this->lineBreak;
    }

    public function setLineBreak(?string $lineBreak = null)
    {
        $this->lineBreak = $lineBreak;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVerticalAlign(): ?string
    {
        return $this->verticalAlign;
    }

    public function setVerticalAlign(?string $verticalAlign = null)
    {
        $this->verticalAlign = $verticalAlign;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getWritingModeAutomatic(): ?bool
    {
        return $this->writingModeAutomatic;
    }

    public function setWritingModeAutomatic(?bool $writingModeAutomatic = null)
    {
        $this->writingModeAutomatic = $writingModeAutomatic;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSnapToLayoutGrid(): ?bool
    {
        return $this->snapToLayoutGrid;
    }

    public function setSnapToLayoutGrid(?bool $snapToLayoutGrid = null)
    {
        $this->snapToLayoutGrid = $snapToLayoutGrid;
    
        return $this;
    }

}
