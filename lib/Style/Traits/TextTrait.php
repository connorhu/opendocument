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

    public function getFontVariant()
    {
        return $this->fontVariant;
    }

    public function setFontVariant($fontVariant = null)
    {
        $this->fontVariant = $fontVariant;
    }

    public function getTextTransform()
    {
        return $this->textTransform;
    }

    public function setTextTransform($textTransform = null)
    {
        $this->textTransform = $textTransform;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color = null)
    {
        $this->color = $color;
    }

    public function getUseWindowFontColor()
    {
        return $this->useWindowFontColor;
    }

    public function setUseWindowFontColor($useWindowFontColor = null)
    {
        $this->useWindowFontColor = $useWindowFontColor;
    }

    public function getTextOutline()
    {
        return $this->textOutline;
    }

    public function setTextOutline($textOutline = null)
    {
        $this->textOutline = $textOutline;
    }

    public function getTextLineThroughType()
    {
        return $this->textLineThroughType;
    }

    public function setTextLineThroughType($textLineThroughType = null)
    {
        $this->textLineThroughType = $textLineThroughType;
    }

    public function getTextLineThroughStyle()
    {
        return $this->textLineThroughStyle;
    }

    public function setTextLineThroughStyle($textLineThroughStyle = null)
    {
        $this->textLineThroughStyle = $textLineThroughStyle;
    }

    public function getTextLineThroughWidth()
    {
        return $this->textLineThroughWidth;
    }

    public function setTextLineThroughWidth($textLineThroughWidth = null)
    {
        $this->textLineThroughWidth = $textLineThroughWidth;
    }

    public function getTextLineThroughColor()
    {
        return $this->textLineThroughColor;
    }

    public function setTextLineThroughColor($textLineThroughColor = null)
    {
        $this->textLineThroughColor = $textLineThroughColor;
    }

    public function getTextLineThroughText()
    {
        return $this->textLineThroughText;
    }

    public function setTextLineThroughText($textLineThroughText = null)
    {
        $this->textLineThroughText = $textLineThroughText;
    }

    public function getTextLineThroughTextStyle()
    {
        return $this->textLineThroughTextStyle;
    }

    public function setTextLineThroughTextStyle($textLineThroughTextStyle = null)
    {
        $this->textLineThroughTextStyle = $textLineThroughTextStyle;
    }

    public function getTextPosition()
    {
        return $this->textPosition;
    }

    public function setTextPosition($textPosition = null)
    {
        $this->textPosition = $textPosition;
    }

    public function getFontName()
    {
        return $this->fontName;
    }

    public function setFontName($fontName = null)
    {
        $this->fontName = $fontName;
    }

    public function getFontNameAsian()
    {
        return $this->fontNameAsian;
    }

    public function setFontNameAsian($fontNameAsian = null)
    {
        $this->fontNameAsian = $fontNameAsian;
    }

    public function getFontNameComplex()
    {
        return $this->fontNameComplex;
    }

    public function setFontNameComplex($fontNameComplex = null)
    {
        $this->fontNameComplex = $fontNameComplex;
    }

    public function getFontFamily()
    {
        return $this->fontFamily;
    }

    public function setFontFamily($fontFamily = null)
    {
        $this->fontFamily = $fontFamily;
    }

    public function getFontFamilyAsian()
    {
        return $this->fontFamilyAsian;
    }

    public function setFontFamilyAsian($fontFamilyAsian = null)
    {
        $this->fontFamilyAsian = $fontFamilyAsian;
    }

    public function getFontFamilyComplex()
    {
        return $this->fontFamilyComplex;
    }

    public function setFontFamilyComplex($fontFamilyComplex = null)
    {
        $this->fontFamilyComplex = $fontFamilyComplex;
    }

    public function getFontFamilyGeneric()
    {
        return $this->fontFamilyGeneric;
    }

    public function setFontFamilyGeneric($fontFamilyGeneric = null)
    {
        $this->fontFamilyGeneric = $fontFamilyGeneric;
    }

    public function getFontFamilyGenericAsian()
    {
        return $this->fontFamilyGenericAsian;
    }

    public function setFontFamilyGenericAsian($fontFamilyGenericAsian = null)
    {
        $this->fontFamilyGenericAsian = $fontFamilyGenericAsian;
    }

    public function getFontFamilyGenericComplex()
    {
        return $this->fontFamilyGenericComplex;
    }

    public function setFontFamilyGenericComplex($fontFamilyGenericComplex = null)
    {
        $this->fontFamilyGenericComplex = $fontFamilyGenericComplex;
    }

    public function getFontStyleName()
    {
        return $this->fontStyleName;
    }

    public function setFontStyleName($fontStyleName = null)
    {
        $this->fontStyleName = $fontStyleName;
    }

    public function getFontStyleNameAsian()
    {
        return $this->fontStyleNameAsian;
    }

    public function setFontStyleNameAsian($fontStyleNameAsian = null)
    {
        $this->fontStyleNameAsian = $fontStyleNameAsian;
    }

    public function getFontStyleNameComplex()
    {
        return $this->fontStyleNameComplex;
    }

    public function setFontStyleNameComplex($fontStyleNameComplex = null)
    {
        $this->fontStyleNameComplex = $fontStyleNameComplex;
    }

    public function getFontPitch()
    {
        return $this->fontPitch;
    }

    public function setFontPitch($fontPitch = null)
    {
        $this->fontPitch = $fontPitch;
    }

    public function getFontPitchAsian()
    {
        return $this->fontPitchAsian;
    }

    public function setFontPitchAsian($fontPitchAsian = null)
    {
        $this->fontPitchAsian = $fontPitchAsian;
    }

    public function getFontPitchComplex()
    {
        return $this->fontPitchComplex;
    }

    public function setFontPitchComplex($fontPitchComplex = null)
    {
        $this->fontPitchComplex = $fontPitchComplex;
    }

    public function getFontCharset()
    {
        return $this->fontCharset;
    }

    public function setFontCharset($fontCharset = null)
    {
        $this->fontCharset = $fontCharset;
    }

    public function getFontCharsetAsian()
    {
        return $this->fontCharsetAsian;
    }

    public function setFontCharsetAsian($fontCharsetAsian = null)
    {
        $this->fontCharsetAsian = $fontCharsetAsian;
    }

    public function getFontCharsetComplex()
    {
        return $this->fontCharsetComplex;
    }

    public function setFontCharsetComplex($fontCharsetComplex = null)
    {
        $this->fontCharsetComplex = $fontCharsetComplex;
    }

    public function getFontSize()
    {
        return $this->fontSize;
    }

    public function setFontSize($fontSize = null)
    {
        $this->fontSize = $fontSize;
    }

    public function getFontSizeAsian()
    {
        return $this->fontSizeAsian;
    }

    public function setFontSizeAsian($fontSizeAsian = null)
    {
        $this->fontSizeAsian = $fontSizeAsian;
    }

    public function getFontSizeComplex()
    {
        return $this->fontSizeComplex;
    }

    public function setFontSizeComplex($fontSizeComplex = null)
    {
        $this->fontSizeComplex = $fontSizeComplex;
    }

    public function getFontSizeRel()
    {
        return $this->fontSizeRel;
    }

    public function setFontSizeRel($fontSizeRel = null)
    {
        $this->fontSizeRel = $fontSizeRel;
    }

    public function getFontSizeRelAsian()
    {
        return $this->fontSizeRelAsian;
    }

    public function setFontSizeRelAsian($fontSizeRelAsian = null)
    {
        $this->fontSizeRelAsian = $fontSizeRelAsian;
    }

    public function getFontSizeRelComplex()
    {
        return $this->fontSizeRelComplex;
    }

    public function setFontSizeRelComplex($fontSizeRelComplex = null)
    {
        $this->fontSizeRelComplex = $fontSizeRelComplex;
    }

    public function getScriptType()
    {
        return $this->scriptType;
    }

    public function setScriptType($scriptType = null)
    {
        $this->scriptType = $scriptType;
    }

    public function getLetterSpacing()
    {
        return $this->letterSpacing;
    }

    public function setLetterSpacing($letterSpacing = null)
    {
        $this->letterSpacing = $letterSpacing;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language = null)
    {
        $this->language = $language;
    }

    public function getLanguageAsian()
    {
        return $this->languageAsian;
    }

    public function setLanguageAsian($languageAsian = null)
    {
        $this->languageAsian = $languageAsian;
    }

    public function getLanguageComplex()
    {
        return $this->languageComplex;
    }

    public function setLanguageComplex($languageComplex = null)
    {
        $this->languageComplex = $languageComplex;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country = null)
    {
        $this->country = $country;
    }

    public function getCountryAsian()
    {
        return $this->countryAsian;
    }

    public function setCountryAsian($countryAsian = null)
    {
        $this->countryAsian = $countryAsian;
    }

    public function getCountryComplex()
    {
        return $this->countryComplex;
    }

    public function setCountryComplex($countryComplex = null)
    {
        $this->countryComplex = $countryComplex;
    }

    public function getScript()
    {
        return $this->script;
    }

    public function setScript($script = null)
    {
        $this->script = $script;
    }

    public function getScriptAsian()
    {
        return $this->scriptAsian;
    }

    public function setScriptAsian($scriptAsian = null)
    {
        $this->scriptAsian = $scriptAsian;
    }

    public function getScriptComplex()
    {
        return $this->scriptComplex;
    }

    public function setScriptComplex($scriptComplex = null)
    {
        $this->scriptComplex = $scriptComplex;
    }

    public function getRfcLanguageTag()
    {
        return $this->rfcLanguageTag;
    }

    public function setRfcLanguageTag($rfcLanguageTag = null)
    {
        $this->rfcLanguageTag = $rfcLanguageTag;
    }

    public function getRfcLanguageTagAsian()
    {
        return $this->rfcLanguageTagAsian;
    }

    public function setRfcLanguageTagAsian($rfcLanguageTagAsian = null)
    {
        $this->rfcLanguageTagAsian = $rfcLanguageTagAsian;
    }

    public function getRfcLanguageTagComplex()
    {
        return $this->rfcLanguageTagComplex;
    }

    public function setRfcLanguageTagComplex($rfcLanguageTagComplex = null)
    {
        $this->rfcLanguageTagComplex = $rfcLanguageTagComplex;
    }

    public function getFontStyle()
    {
        return $this->fontStyle;
    }

    public function setFontStyle($fontStyle = null)
    {
        $this->fontStyle = $fontStyle;
    }

    public function getFontStyleAsian()
    {
        return $this->fontStyleAsian;
    }

    public function setFontStyleAsian($fontStyleAsian = null)
    {
        $this->fontStyleAsian = $fontStyleAsian;
    }

    public function getFontStyleComplex()
    {
        return $this->fontStyleComplex;
    }

    public function setFontStyleComplex($fontStyleComplex = null)
    {
        $this->fontStyleComplex = $fontStyleComplex;
    }

    public function getFontRelief()
    {
        return $this->fontRelief;
    }

    public function setFontRelief($fontRelief = null)
    {
        $this->fontRelief = $fontRelief;
    }

    public function getTextShadow()
    {
        return $this->textShadow;
    }

    public function setTextShadow($textShadow = null)
    {
        $this->textShadow = $textShadow;
    }

    public function getTextUnderlineType()
    {
        return $this->textUnderlineType;
    }

    public function setTextUnderlineType($textUnderlineType = null)
    {
        $this->textUnderlineType = $textUnderlineType;
    }

    public function getTextUnderlineStyle()
    {
        return $this->textUnderlineStyle;
    }

    public function setTextUnderlineStyle($textUnderlineStyle = null)
    {
        $this->textUnderlineStyle = $textUnderlineStyle;
    }

    public function getTextUnderlineWidth()
    {
        return $this->textUnderlineWidth;
    }

    public function setTextUnderlineWidth($textUnderlineWidth = null)
    {
        $this->textUnderlineWidth = $textUnderlineWidth;
    }

    public function getTextUnderlineColor()
    {
        return $this->textUnderlineColor;
    }

    public function setTextUnderlineColor($textUnderlineColor = null)
    {
        $this->textUnderlineColor = $textUnderlineColor;
    }

    public function getTextOverlineType()
    {
        return $this->textOverlineType;
    }

    public function setTextOverlineType($textOverlineType = null)
    {
        $this->textOverlineType = $textOverlineType;
    }

    public function getTextOverlineStyle()
    {
        return $this->textOverlineStyle;
    }

    public function setTextOverlineStyle($textOverlineStyle = null)
    {
        $this->textOverlineStyle = $textOverlineStyle;
    }

    public function getTextOverlineWidth()
    {
        return $this->textOverlineWidth;
    }

    public function setTextOverlineWidth($textOverlineWidth = null)
    {
        $this->textOverlineWidth = $textOverlineWidth;
    }

    public function getTextOverlineColor()
    {
        return $this->textOverlineColor;
    }

    public function setTextOverlineColor($textOverlineColor = null)
    {
        $this->textOverlineColor = $textOverlineColor;
    }

    public function getTextOverlineMode()
    {
        return $this->textOverlineMode;
    }

    public function setTextOverlineMode($textOverlineMode = null)
    {
        $this->textOverlineMode = $textOverlineMode;
    }

    public function getFontWeight()
    {
        return $this->fontWeight;
    }

    public function setFontWeight($fontWeight = null)
    {
        $this->fontWeight = $fontWeight;
    }

    public function getFontWeightAsian()
    {
        return $this->fontWeightAsian;
    }

    public function setFontWeightAsian($fontWeightAsian = null)
    {
        $this->fontWeightAsian = $fontWeightAsian;
    }

    public function getFontWeightComplex()
    {
        return $this->fontWeightComplex;
    }

    public function setFontWeightComplex($fontWeightComplex = null)
    {
        $this->fontWeightComplex = $fontWeightComplex;
    }

    public function getTextUnderlineMode()
    {
        return $this->textUnderlineMode;
    }

    public function setTextUnderlineMode($textUnderlineMode = null)
    {
        $this->textUnderlineMode = $textUnderlineMode;
    }

    public function getTextLineThroughMode()
    {
        return $this->textLineThroughMode;
    }

    public function setTextLineThroughMode($textLineThroughMode = null)
    {
        $this->textLineThroughMode = $textLineThroughMode;
    }

    public function getLetterKerning()
    {
        return $this->letterKerning;
    }

    public function setLetterKerning($letterKerning = null)
    {
        $this->letterKerning = $letterKerning;
    }

    public function getTextBlinking()
    {
        return $this->textBlinking;
    }

    public function setTextBlinking($textBlinking = null)
    {
        $this->textBlinking = $textBlinking;
    }

    public function getTextCombine()
    {
        return $this->textCombine;
    }

    public function setTextCombine($textCombine = null)
    {
        $this->textCombine = $textCombine;
    }

    public function getTextCombineStartChar()
    {
        return $this->textCombineStartChar;
    }

    public function setTextCombineStartChar($textCombineStartChar = null)
    {
        $this->textCombineStartChar = $textCombineStartChar;
    }

    public function getTextCombineEndChar()
    {
        return $this->textCombineEndChar;
    }

    public function setTextCombineEndChar($textCombineEndChar = null)
    {
        $this->textCombineEndChar = $textCombineEndChar;
    }

    public function getTextEmphasize()
    {
        return $this->textEmphasize;
    }

    public function setTextEmphasize($textEmphasize = null)
    {
        $this->textEmphasize = $textEmphasize;
    }

    public function getTextScale()
    {
        return $this->textScale;
    }

    public function setTextScale($textScale = null)
    {
        $this->textScale = $textScale;
    }

    public function getTextRotationAngle()
    {
        return $this->textRotationAngle;
    }

    public function setTextRotationAngle($textRotationAngle = null)
    {
        $this->textRotationAngle = $textRotationAngle;
    }

    public function getTextRotationScale()
    {
        return $this->textRotationScale;
    }

    public function setTextRotationScale($textRotationScale = null)
    {
        $this->textRotationScale = $textRotationScale;
    }

    public function getHyphenate()
    {
        return $this->hyphenate;
    }

    public function setHyphenate($hyphenate = null)
    {
        $this->hyphenate = $hyphenate;
    }

    public function getHyphenationRemainCharCount()
    {
        return $this->hyphenationRemainCharCount;
    }

    public function setHyphenationRemainCharCount($hyphenationRemainCharCount = null)
    {
        $this->hyphenationRemainCharCount = $hyphenationRemainCharCount;
    }

    public function getHyphenationPushCharCount()
    {
        return $this->hyphenationPushCharCount;
    }

    public function setHyphenationPushCharCount($hyphenationPushCharCount = null)
    {
        $this->hyphenationPushCharCount = $hyphenationPushCharCount;
    }

    public function getDisplay()
    {
        return $this->display;
    }

    public function setDisplay($display)
    {
        $this->display = $display;
    }

    public function getCondition()
    {
        return $this->condition;
    }

    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

}
