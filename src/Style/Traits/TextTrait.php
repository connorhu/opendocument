<?php

namespace OpenDocument\Style\Traits;

trait TextTrait
{
    protected $fontVariant = null;

    protected $textTransform = null;

    protected $color = null;

    protected $useWindowFontColor = null;

    protected $textOutline = null;

    protected $textLineThroughType = null;

    protected $textLineThroughStyle = null;

    protected $textLineThroughWidth = null;

    protected $textLineThroughColor = null;

    protected $textLineThroughText = null;

    protected $textLineThroughTextStyle = null;

    protected $textPosition = null;

    protected $fontName = null;

    protected $fontNameAsian = null;

    protected $fontNameComplex = null;

    protected $fontFamily = null;

    protected $fontFamilyAsian = null;

    protected $fontFamilyComplex = null;

    protected $fontFamilyGeneric = null;

    protected $fontFamilyGenericAsian = null;

    protected $fontFamilyGenericComplex = null;

    protected $fontStyleName = null;

    protected $fontStyleNameAsian = null;

    protected $fontStyleNameComplex = null;

    protected $fontPitch = null;

    protected $fontPitchAsian = null;

    protected $fontPitchComplex = null;

    protected $fontCharset = null;

    protected $fontCharsetAsian = null;

    protected $fontCharsetComplex = null;

    protected $fontSize = null;

    protected $fontSizeAsian = null;

    protected $fontSizeComplex = null;

    protected $fontSizeRel = null;

    protected $fontSizeRelAsian = null;

    protected $fontSizeRelComplex = null;

    protected $scriptType = null;

    protected $letterSpacing = null;

    protected $language = null;

    protected $languageAsian = null;

    protected $languageComplex = null;

    protected $country = null;

    protected $countryAsian = null;

    protected $countryComplex = null;

    protected $script = null;

    protected $scriptAsian = null;

    protected $scriptComplex = null;

    protected $rfcLanguageTag = null;

    protected $rfcLanguageTagAsian = null;

    protected $rfcLanguageTagComplex = null;

    protected $fontStyle = null;

    protected $fontStyleAsian = null;

    protected $fontStyleComplex = null;

    protected $fontRelief = null;

    protected $textShadow = null;

    protected $textUnderlineType = null;

    protected $textUnderlineStyle = null;

    protected $textUnderlineWidth = null;

    protected $textUnderlineColor = null;

    protected $textOverlineType = null;

    protected $textOverlineStyle = null;

    protected $textOverlineWidth = null;

    protected $textOverlineColor = null;

    protected $textOverlineMode = null;

    protected $fontWeight = null;

    protected $fontWeightAsian = null;

    protected $fontWeightComplex = null;

    protected $textUnderlineMode = null;

    protected $textLineThroughMode = null;

    protected $letterKerning = null;

    protected $textBlinking = null;

    protected $textCombine = null;

    protected $textCombineStartChar = null;

    protected $textCombineEndChar = null;

    protected $textEmphasize = null;

    protected $textScale = null;

    protected $textRotationAngle = null;

    protected $textRotationScale = null;

    protected $hyphenate = null;

    protected $hyphenationRemainCharCount = null;

    protected $hyphenationPushCharCount = null;

    protected $display;

    protected $condition;

    /**
     * it returns fontVariant
     *
     * @return string|null it returns fontVariant
     */
    public function getFontVariant(): ?string
    {
        return $this->fontVariant;
    }

    public function setFontVariant($fontVariant = null)
    {
        $this->fontVariant = $fontVariant;
    }

    /**
     * it returns textTransform
     *
     * @return string|null it returns textTransform
     */
    public function getTextTransform(): ?string
    {
        return $this->textTransform;
    }

    public function setTextTransform($textTransform = null)
    {
        $this->textTransform = $textTransform;
    }

    /**
     * it returns color
     *
     * @return string|null it returns color
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor($color = null)
    {
        $this->color = $color;
    }

    /**
     * it returns useWindowFontColor
     *
     * @return string|null it returns useWindowFontColor
     */
    public function getUseWindowFontColor(): ?string
    {
        return $this->useWindowFontColor;
    }

    public function setUseWindowFontColor($useWindowFontColor = null)
    {
        $this->useWindowFontColor = $useWindowFontColor;
    }

    /**
     * it returns textOutline
     *
     * @return string|null it returns textOutline
     */
    public function getTextOutline(): ?string
    {
        return $this->textOutline;
    }

    public function setTextOutline($textOutline = null)
    {
        $this->textOutline = $textOutline;
    }

    /**
     * it returns textLineThroughType
     *
     * @return string|null it returns textLineThroughType
     */
    public function getTextLineThroughType(): ?string
    {
        return $this->textLineThroughType;
    }

    public function setTextLineThroughType($textLineThroughType = null)
    {
        $this->textLineThroughType = $textLineThroughType;
    }

    /**
     * it returns textLineThroughStyle
     *
     * @return string|null it returns textLineThroughStyle
     */
    public function getTextLineThroughStyle(): ?string
    {
        return $this->textLineThroughStyle;
    }

    public function setTextLineThroughStyle($textLineThroughStyle = null)
    {
        $this->textLineThroughStyle = $textLineThroughStyle;
    }

    /**
     * it returns textLineThroughWidth
     *
     * @return string|null it returns textLineThroughWidth
     */
    public function getTextLineThroughWidth(): ?string
    {
        return $this->textLineThroughWidth;
    }

    public function setTextLineThroughWidth($textLineThroughWidth = null)
    {
        $this->textLineThroughWidth = $textLineThroughWidth;
    }

    /**
     * it returns textLineThroughColor
     *
     * @return string|null it returns textLineThroughColor
     */
    public function getTextLineThroughColor(): ?string
    {
        return $this->textLineThroughColor;
    }

    public function setTextLineThroughColor($textLineThroughColor = null)
    {
        $this->textLineThroughColor = $textLineThroughColor;
    }

    /**
     * it returns textLineThroughText
     *
     * @return string|null it returns textLineThroughText
     */
    public function getTextLineThroughText(): ?string
    {
        return $this->textLineThroughText;
    }

    public function setTextLineThroughText($textLineThroughText = null)
    {
        $this->textLineThroughText = $textLineThroughText;
    }

    /**
     * it returns textLineThroughTextStyle
     *
     * @return string|null it returns textLineThroughTextStyle
     */
    public function getTextLineThroughTextStyle(): ?string
    {
        return $this->textLineThroughTextStyle;
    }

    public function setTextLineThroughTextStyle($textLineThroughTextStyle = null)
    {
        $this->textLineThroughTextStyle = $textLineThroughTextStyle;
    }

    /**
     * it returns textPosition
     *
     * @return string|null it returns textPosition
     */
    public function getTextPosition(): ?string
    {
        return $this->textPosition;
    }

    public function setTextPosition($textPosition = null)
    {
        $this->textPosition = $textPosition;
    }

    /**
     * it returns fontName
     *
     * @return string|null it returns fontName
     */
    public function getFontName(): ?string
    {
        return $this->fontName;
    }

    public function setFontName($fontName = null)
    {
        $this->fontName = $fontName;
    }

    /**
     * it returns fontNameAsian
     *
     * @return string|null it returns fontNameAsian
     */
    public function getFontNameAsian(): ?string
    {
        return $this->fontNameAsian;
    }

    public function setFontNameAsian($fontNameAsian = null)
    {
        $this->fontNameAsian = $fontNameAsian;
    }

    /**
     * it returns fontNameComplex
     *
     * @return string|null it returns fontNameComplex
     */
    public function getFontNameComplex(): ?string
    {
        return $this->fontNameComplex;
    }

    public function setFontNameComplex($fontNameComplex = null)
    {
        $this->fontNameComplex = $fontNameComplex;
    }

    /**
     * it returns fontFamily
     *
     * @return string|null it returns fontFamily
     */
    public function getFontFamily(): ?string
    {
        return $this->fontFamily;
    }

    public function setFontFamily($fontFamily = null)
    {
        $this->fontFamily = $fontFamily;
    }

    /**
     * it returns fontFamilyAsian
     *
     * @return string|null it returns fontFamilyAsian
     */
    public function getFontFamilyAsian(): ?string
    {
        return $this->fontFamilyAsian;
    }

    public function setFontFamilyAsian($fontFamilyAsian = null)
    {
        $this->fontFamilyAsian = $fontFamilyAsian;
    }

    /**
     * it returns fontFamilyComplex
     *
     * @return string|null it returns fontFamilyComplex
     */
    public function getFontFamilyComplex(): ?string
    {
        return $this->fontFamilyComplex;
    }

    public function setFontFamilyComplex($fontFamilyComplex = null)
    {
        $this->fontFamilyComplex = $fontFamilyComplex;
    }

    /**
     * it returns fontFamilyGeneric
     *
     * @return string|null it returns fontFamilyGeneric
     */
    public function getFontFamilyGeneric(): ?string
    {
        return $this->fontFamilyGeneric;
    }

    public function setFontFamilyGeneric($fontFamilyGeneric = null)
    {
        $this->fontFamilyGeneric = $fontFamilyGeneric;
    }

    /**
     * it returns fontFamilyGenericAsian
     *
     * @return string|null it returns fontFamilyGenericAsian
     */
    public function getFontFamilyGenericAsian(): ?string
    {
        return $this->fontFamilyGenericAsian;
    }

    public function setFontFamilyGenericAsian($fontFamilyGenericAsian = null)
    {
        $this->fontFamilyGenericAsian = $fontFamilyGenericAsian;
    }

    /**
     * it returns fontFamilyGenericComplex
     *
     * @return string|null it returns fontFamilyGenericComplex
     */
    public function getFontFamilyGenericComplex(): ?string
    {
        return $this->fontFamilyGenericComplex;
    }

    public function setFontFamilyGenericComplex($fontFamilyGenericComplex = null)
    {
        $this->fontFamilyGenericComplex = $fontFamilyGenericComplex;
    }

    /**
     * it returns fontStyleName
     *
     * @return string|null it returns fontStyleName
     */
    public function getFontStyleName(): ?string
    {
        return $this->fontStyleName;
    }

    public function setFontStyleName($fontStyleName = null)
    {
        $this->fontStyleName = $fontStyleName;
    }

    /**
     * it returns fontStyleNameAsian
     *
     * @return string|null it returns fontStyleNameAsian
     */
    public function getFontStyleNameAsian(): ?string
    {
        return $this->fontStyleNameAsian;
    }

    public function setFontStyleNameAsian($fontStyleNameAsian = null)
    {
        $this->fontStyleNameAsian = $fontStyleNameAsian;
    }

    /**
     * it returns fontStyleNameComplex
     *
     * @return string|null it returns fontStyleNameComplex
     */
    public function getFontStyleNameComplex(): ?string
    {
        return $this->fontStyleNameComplex;
    }

    public function setFontStyleNameComplex($fontStyleNameComplex = null)
    {
        $this->fontStyleNameComplex = $fontStyleNameComplex;
    }

    /**
     * it returns fontPitch
     *
     * @return string|null it returns fontPitch
     */
    public function getFontPitch(): ?string
    {
        return $this->fontPitch;
    }

    public function setFontPitch($fontPitch = null)
    {
        $this->fontPitch = $fontPitch;
    }

    /**
     * it returns fontPitchAsian
     *
     * @return string|null it returns fontPitchAsian
     */
    public function getFontPitchAsian(): ?string
    {
        return $this->fontPitchAsian;
    }

    public function setFontPitchAsian($fontPitchAsian = null)
    {
        $this->fontPitchAsian = $fontPitchAsian;
    }

    /**
     * it returns fontPitchComplex
     *
     * @return string|null it returns fontPitchComplex
     */
    public function getFontPitchComplex(): ?string
    {
        return $this->fontPitchComplex;
    }

    public function setFontPitchComplex($fontPitchComplex = null)
    {
        $this->fontPitchComplex = $fontPitchComplex;
    }

    /**
     * it returns fontCharset
     *
     * @return string|null it returns fontCharset
     */
    public function getFontCharset(): ?string
    {
        return $this->fontCharset;
    }

    public function setFontCharset($fontCharset = null)
    {
        $this->fontCharset = $fontCharset;
    }

    /**
     * it returns fontCharsetAsian
     *
     * @return string|null it returns fontCharsetAsian
     */
    public function getFontCharsetAsian(): ?string
    {
        return $this->fontCharsetAsian;
    }

    public function setFontCharsetAsian($fontCharsetAsian = null)
    {
        $this->fontCharsetAsian = $fontCharsetAsian;
    }

    /**
     * it returns fontCharsetComplex
     *
     * @return string|null it returns fontCharsetComplex
     */
    public function getFontCharsetComplex(): ?string
    {
        return $this->fontCharsetComplex;
    }

    public function setFontCharsetComplex($fontCharsetComplex = null)
    {
        $this->fontCharsetComplex = $fontCharsetComplex;
    }

    /**
     * it returns fontSize
     *
     * @return string|null it returns fontSize
     */
    public function getFontSize(): ?string
    {
        return $this->fontSize;
    }

    public function setFontSize($fontSize = null)
    {
        $this->fontSize = $fontSize;
    }

    /**
     * it returns fontSizeAsian
     *
     * @return string|null it returns fontSizeAsian
     */
    public function getFontSizeAsian(): ?string
    {
        return $this->fontSizeAsian;
    }

    public function setFontSizeAsian($fontSizeAsian = null)
    {
        $this->fontSizeAsian = $fontSizeAsian;
    }

    /**
     * it returns fontSizeComplex
     *
     * @return string|null it returns fontSizeComplex
     */
    public function getFontSizeComplex(): ?string
    {
        return $this->fontSizeComplex;
    }

    public function setFontSizeComplex($fontSizeComplex = null)
    {
        $this->fontSizeComplex = $fontSizeComplex;
    }

    /**
     * it returns fontSizeRel
     *
     * @return string|null it returns fontSizeRel
     */
    public function getFontSizeRel(): ?string
    {
        return $this->fontSizeRel;
    }

    public function setFontSizeRel($fontSizeRel = null)
    {
        $this->fontSizeRel = $fontSizeRel;
    }

    /**
     * it returns fontSizeRelAsian
     *
     * @return string|null it returns fontSizeRelAsian
     */
    public function getFontSizeRelAsian(): ?string
    {
        return $this->fontSizeRelAsian;
    }

    public function setFontSizeRelAsian($fontSizeRelAsian = null)
    {
        $this->fontSizeRelAsian = $fontSizeRelAsian;
    }

    /**
     * it returns fontSizeRelComplex
     *
     * @return string|null it returns fontSizeRelComplex
     */
    public function getFontSizeRelComplex(): ?string
    {
        return $this->fontSizeRelComplex;
    }

    public function setFontSizeRelComplex($fontSizeRelComplex = null)
    {
        $this->fontSizeRelComplex = $fontSizeRelComplex;
    }

    /**
     * it returns scriptType
     *
     * @return string|null it returns scriptType
     */
    public function getScriptType(): ?string
    {
        return $this->scriptType;
    }

    public function setScriptType($scriptType = null)
    {
        $this->scriptType = $scriptType;
    }

    /**
     * it returns letterSpacing
     *
     * @return string|null it returns letterSpacing
     */
    public function getLetterSpacing(): ?string
    {
        return $this->letterSpacing;
    }

    public function setLetterSpacing($letterSpacing = null)
    {
        $this->letterSpacing = $letterSpacing;
    }

    /**
     * it returns language
     *
     * @return string|null it returns language
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage($language = null)
    {
        $this->language = $language;
    }

    /**
     * it returns languageAsian
     *
     * @return string|null it returns languageAsian
     */
    public function getLanguageAsian(): ?string
    {
        return $this->languageAsian;
    }

    public function setLanguageAsian($languageAsian = null)
    {
        $this->languageAsian = $languageAsian;
    }

    /**
     * it returns languageComplex
     *
     * @return string|null it returns languageComplex
     */
    public function getLanguageComplex(): ?string
    {
        return $this->languageComplex;
    }

    public function setLanguageComplex($languageComplex = null)
    {
        $this->languageComplex = $languageComplex;
    }

    /**
     * it returns country
     *
     * @return string|null it returns country
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry($country = null)
    {
        $this->country = $country;
    }

    /**
     * it returns countryAsian
     *
     * @return string|null it returns countryAsian
     */
    public function getCountryAsian(): ?string
    {
        return $this->countryAsian;
    }

    public function setCountryAsian($countryAsian = null)
    {
        $this->countryAsian = $countryAsian;
    }

    /**
     * it returns countryComplex
     *
     * @return string|null it returns countryComplex
     */
    public function getCountryComplex(): ?string
    {
        return $this->countryComplex;
    }

    public function setCountryComplex($countryComplex = null)
    {
        $this->countryComplex = $countryComplex;
    }

    /**
     * it returns script
     *
     * @return string|null it returns script
     */
    public function getScript(): ?string
    {
        return $this->script;
    }

    public function setScript($script = null)
    {
        $this->script = $script;
    }

    /**
     * it returns scriptAsian
     *
     * @return string|null it returns scriptAsian
     */
    public function getScriptAsian(): ?string
    {
        return $this->scriptAsian;
    }

    public function setScriptAsian($scriptAsian = null)
    {
        $this->scriptAsian = $scriptAsian;
    }

    /**
     * it returns scriptComplex
     *
     * @return string|null it returns scriptComplex
     */
    public function getScriptComplex(): ?string
    {
        return $this->scriptComplex;
    }

    public function setScriptComplex($scriptComplex = null)
    {
        $this->scriptComplex = $scriptComplex;
    }

    /**
     * it returns rfcLanguageTag
     *
     * @return string|null it returns rfcLanguageTag
     */
    public function getRfcLanguageTag(): ?string
    {
        return $this->rfcLanguageTag;
    }

    public function setRfcLanguageTag($rfcLanguageTag = null)
    {
        $this->rfcLanguageTag = $rfcLanguageTag;
    }

    /**
     * it returns rfcLanguageTagAsian
     *
     * @return string|null it returns rfcLanguageTagAsian
     */
    public function getRfcLanguageTagAsian(): ?string
    {
        return $this->rfcLanguageTagAsian;
    }

    public function setRfcLanguageTagAsian($rfcLanguageTagAsian = null)
    {
        $this->rfcLanguageTagAsian = $rfcLanguageTagAsian;
    }

    /**
     * it returns rfcLanguageTagComplex
     *
     * @return string|null it returns rfcLanguageTagComplex
     */
    public function getRfcLanguageTagComplex(): ?string
    {
        return $this->rfcLanguageTagComplex;
    }

    public function setRfcLanguageTagComplex($rfcLanguageTagComplex = null)
    {
        $this->rfcLanguageTagComplex = $rfcLanguageTagComplex;
    }

    /**
     * it returns fontStyle
     *
     * @return string|null it returns fontStyle
     */
    public function getFontStyle(): ?string
    {
        return $this->fontStyle;
    }

    public function setFontStyle($fontStyle = null)
    {
        $this->fontStyle = $fontStyle;
    }

    /**
     * it returns fontStyleAsian
     *
     * @return string|null it returns fontStyleAsian
     */
    public function getFontStyleAsian(): ?string
    {
        return $this->fontStyleAsian;
    }

    public function setFontStyleAsian($fontStyleAsian = null)
    {
        $this->fontStyleAsian = $fontStyleAsian;
    }

    /**
     * it returns fontStyleComplex
     *
     * @return string|null it returns fontStyleComplex
     */
    public function getFontStyleComplex(): ?string
    {
        return $this->fontStyleComplex;
    }

    public function setFontStyleComplex($fontStyleComplex = null)
    {
        $this->fontStyleComplex = $fontStyleComplex;
    }

    /**
     * it returns fontRelief
     *
     * @return string|null it returns fontRelief
     */
    public function getFontRelief(): ?string
    {
        return $this->fontRelief;
    }

    public function setFontRelief($fontRelief = null)
    {
        $this->fontRelief = $fontRelief;
    }

    /**
     * it returns textShadow
     *
     * @return string|null it returns textShadow
     */
    public function getTextShadow(): ?string
    {
        return $this->textShadow;
    }

    public function setTextShadow($textShadow = null)
    {
        $this->textShadow = $textShadow;
    }

    /**
     * it returns textUnderlineType
     *
     * @return string|null it returns textUnderlineType
     */
    public function getTextUnderlineType(): ?string
    {
        return $this->textUnderlineType;
    }

    public function setTextUnderlineType($textUnderlineType = null)
    {
        $this->textUnderlineType = $textUnderlineType;
    }

    /**
     * it returns textUnderlineStyle
     *
     * @return string|null it returns textUnderlineStyle
     */
    public function getTextUnderlineStyle(): ?string
    {
        return $this->textUnderlineStyle;
    }

    public function setTextUnderlineStyle($textUnderlineStyle = null)
    {
        $this->textUnderlineStyle = $textUnderlineStyle;
    }

    /**
     * it returns textUnderlineWidth
     *
     * @return string|null it returns textUnderlineWidth
     */
    public function getTextUnderlineWidth(): ?string
    {
        return $this->textUnderlineWidth;
    }

    public function setTextUnderlineWidth($textUnderlineWidth = null)
    {
        $this->textUnderlineWidth = $textUnderlineWidth;
    }

    /**
     * it returns textUnderlineColor
     *
     * @return string|null it returns textUnderlineColor
     */
    public function getTextUnderlineColor(): ?string
    {
        return $this->textUnderlineColor;
    }

    public function setTextUnderlineColor($textUnderlineColor = null)
    {
        $this->textUnderlineColor = $textUnderlineColor;
    }

    /**
     * it returns textOverlineType
     *
     * @return string|null it returns textOverlineType
     */
    public function getTextOverlineType(): ?string
    {
        return $this->textOverlineType;
    }

    public function setTextOverlineType($textOverlineType = null)
    {
        $this->textOverlineType = $textOverlineType;
    }

    /**
     * it returns textOverlineStyle
     *
     * @return string|null it returns textOverlineStyle
     */
    public function getTextOverlineStyle(): ?string
    {
        return $this->textOverlineStyle;
    }

    public function setTextOverlineStyle($textOverlineStyle = null)
    {
        $this->textOverlineStyle = $textOverlineStyle;
    }

    /**
     * it returns textOverlineWidth
     *
     * @return string|null it returns textOverlineWidth
     */
    public function getTextOverlineWidth(): ?string
    {
        return $this->textOverlineWidth;
    }

    public function setTextOverlineWidth($textOverlineWidth = null)
    {
        $this->textOverlineWidth = $textOverlineWidth;
    }

    /**
     * it returns textOverlineColor
     *
     * @return string|null it returns textOverlineColor
     */
    public function getTextOverlineColor(): ?string
    {
        return $this->textOverlineColor;
    }

    public function setTextOverlineColor($textOverlineColor = null)
    {
        $this->textOverlineColor = $textOverlineColor;
    }

    /**
     * it returns textOverlineMode
     *
     * @return string|null it returns textOverlineMode
     */
    public function getTextOverlineMode(): ?string
    {
        return $this->textOverlineMode;
    }

    public function setTextOverlineMode($textOverlineMode = null)
    {
        $this->textOverlineMode = $textOverlineMode;
    }

    /**
     * it returns fontWeight
     *
     * @return string|null it returns fontWeight
     */
    public function getFontWeight(): ?string
    {
        return $this->fontWeight;
    }

    public function setFontWeight($fontWeight = null)
    {
        $this->fontWeight = $fontWeight;
    }

    /**
     * it returns fontWeightAsian
     *
     * @return string|null it returns fontWeightAsian
     */
    public function getFontWeightAsian(): ?string
    {
        return $this->fontWeightAsian;
    }

    public function setFontWeightAsian($fontWeightAsian = null)
    {
        $this->fontWeightAsian = $fontWeightAsian;
    }

    /**
     * it returns fontWeightComplex
     *
     * @return string|null it returns fontWeightComplex
     */
    public function getFontWeightComplex(): ?string
    {
        return $this->fontWeightComplex;
    }

    public function setFontWeightComplex($fontWeightComplex = null)
    {
        $this->fontWeightComplex = $fontWeightComplex;
    }

    /**
     * it returns textUnderlineMode
     *
     * @return string|null it returns textUnderlineMode
     */
    public function getTextUnderlineMode(): ?string
    {
        return $this->textUnderlineMode;
    }

    public function setTextUnderlineMode($textUnderlineMode = null)
    {
        $this->textUnderlineMode = $textUnderlineMode;
    }

    /**
     * it returns textLineThroughMode
     *
     * @return string|null it returns textLineThroughMode
     */
    public function getTextLineThroughMode(): ?string
    {
        return $this->textLineThroughMode;
    }

    public function setTextLineThroughMode($textLineThroughMode = null)
    {
        $this->textLineThroughMode = $textLineThroughMode;
    }

    /**
     * it returns letterKerning
     *
     * @return string|null it returns letterKerning
     */
    public function getLetterKerning(): ?string
    {
        return $this->letterKerning;
    }

    public function setLetterKerning($letterKerning = null)
    {
        $this->letterKerning = $letterKerning;
    }

    /**
     * it returns textBlinking
     *
     * @return string|null it returns textBlinking
     */
    public function getTextBlinking(): ?string
    {
        return $this->textBlinking;
    }

    public function setTextBlinking($textBlinking = null)
    {
        $this->textBlinking = $textBlinking;
    }

    /**
     * it returns textCombine
     *
     * @return string|null it returns textCombine
     */
    public function getTextCombine(): ?string
    {
        return $this->textCombine;
    }

    public function setTextCombine($textCombine = null)
    {
        $this->textCombine = $textCombine;
    }

    /**
     * it returns textCombineStartChar
     *
     * @return string|null it returns textCombineStartChar
     */
    public function getTextCombineStartChar(): ?string
    {
        return $this->textCombineStartChar;
    }

    public function setTextCombineStartChar($textCombineStartChar = null)
    {
        $this->textCombineStartChar = $textCombineStartChar;
    }

    /**
     * it returns textCombineEndChar
     *
     * @return string|null it returns textCombineEndChar
     */
    public function getTextCombineEndChar(): ?string
    {
        return $this->textCombineEndChar;
    }

    public function setTextCombineEndChar($textCombineEndChar = null)
    {
        $this->textCombineEndChar = $textCombineEndChar;
    }

    /**
     * it returns textEmphasize
     *
     * @return string|null it returns textEmphasize
     */
    public function getTextEmphasize(): ?string
    {
        return $this->textEmphasize;
    }

    public function setTextEmphasize($textEmphasize = null)
    {
        $this->textEmphasize = $textEmphasize;
    }

    /**
     * it returns textScale
     *
     * @return string|null it returns textScale
     */
    public function getTextScale(): ?string
    {
        return $this->textScale;
    }

    public function setTextScale($textScale = null)
    {
        $this->textScale = $textScale;
    }

    /**
     * it returns textRotationAngle
     *
     * @return string|null it returns textRotationAngle
     */
    public function getTextRotationAngle(): ?string
    {
        return $this->textRotationAngle;
    }

    public function setTextRotationAngle($textRotationAngle = null)
    {
        $this->textRotationAngle = $textRotationAngle;
    }

    /**
     * it returns textRotationScale
     *
     * @return string|null it returns textRotationScale
     */
    public function getTextRotationScale(): ?string
    {
        return $this->textRotationScale;
    }

    public function setTextRotationScale($textRotationScale = null)
    {
        $this->textRotationScale = $textRotationScale;
    }

    /**
     * it returns hyphenate
     *
     * @return string|null it returns hyphenate
     */
    public function getHyphenate(): ?string
    {
        return $this->hyphenate;
    }

    public function setHyphenate($hyphenate = null)
    {
        $this->hyphenate = $hyphenate;
    }

    /**
     * it returns hyphenationRemainCharCount
     *
     * @return string|null it returns hyphenationRemainCharCount
     */
    public function getHyphenationRemainCharCount(): ?string
    {
        return $this->hyphenationRemainCharCount;
    }

    public function setHyphenationRemainCharCount($hyphenationRemainCharCount = null)
    {
        $this->hyphenationRemainCharCount = $hyphenationRemainCharCount;
    }

    /**
     * it returns hyphenationPushCharCount
     *
     * @return string|null it returns hyphenationPushCharCount
     */
    public function getHyphenationPushCharCount(): ?string
    {
        return $this->hyphenationPushCharCount;
    }

    public function setHyphenationPushCharCount($hyphenationPushCharCount = null)
    {
        $this->hyphenationPushCharCount = $hyphenationPushCharCount;
    }

    /**
     * it returns display
     *
     * @return string|null it returns display
     */
    public function getDisplay(): ?string
    {
        return $this->display;
    }

    public function setDisplay($display)
    {
        $this->display = $display;
    }

    /**
     * it returns condition
     *
     * @return string|null it returns condition
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

}
