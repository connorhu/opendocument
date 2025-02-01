<?php

namespace src\Style\Interfaces;

interface TextInterface
{
    /**
     * it returns fontVariant
     *
     * @return string|null it returns fontVariant
     */
    public function getFontVariant(): ?string;

    public function setFontVariant($fontVariant = null);

    /**
     * it returns textTransform
     *
     * @return string|null it returns textTransform
     */
    public function getTextTransform(): ?string;

    public function setTextTransform($textTransform = null);

    /**
     * it returns color
     *
     * @return string|null it returns color
     */
    public function getColor(): ?string;

    public function setColor($color = null);

    /**
     * it returns useWindowFontColor
     *
     * @return string|null it returns useWindowFontColor
     */
    public function getUseWindowFontColor(): ?string;

    public function setUseWindowFontColor($useWindowFontColor = null);

    /**
     * it returns textOutline
     *
     * @return string|null it returns textOutline
     */
    public function getTextOutline(): ?string;

    public function setTextOutline($textOutline = null);

    /**
     * it returns textLineThroughType
     *
     * @return string|null it returns textLineThroughType
     */
    public function getTextLineThroughType(): ?string;

    public function setTextLineThroughType($textLineThroughType = null);

    /**
     * it returns textLineThroughStyle
     *
     * @return string|null it returns textLineThroughStyle
     */
    public function getTextLineThroughStyle(): ?string;

    public function setTextLineThroughStyle($textLineThroughStyle = null);

    /**
     * it returns textLineThroughWidth
     *
     * @return string|null it returns textLineThroughWidth
     */
    public function getTextLineThroughWidth(): ?string;

    public function setTextLineThroughWidth($textLineThroughWidth = null);

    /**
     * it returns textLineThroughColor
     *
     * @return string|null it returns textLineThroughColor
     */
    public function getTextLineThroughColor(): ?string;

    public function setTextLineThroughColor($textLineThroughColor = null);

    /**
     * it returns textLineThroughText
     *
     * @return string|null it returns textLineThroughText
     */
    public function getTextLineThroughText(): ?string;

    public function setTextLineThroughText($textLineThroughText = null);

    /**
     * it returns textLineThroughTextStyle
     *
     * @return string|null it returns textLineThroughTextStyle
     */
    public function getTextLineThroughTextStyle(): ?string;

    public function setTextLineThroughTextStyle($textLineThroughTextStyle = null);

    /**
     * it returns textPosition
     *
     * @return string|null it returns textPosition
     */
    public function getTextPosition(): ?string;

    public function setTextPosition($textPosition = null);

    /**
     * it returns fontName
     *
     * @return string|null it returns fontName
     */
    public function getFontName(): ?string;

    public function setFontName($fontName = null);

    /**
     * it returns fontNameAsian
     *
     * @return string|null it returns fontNameAsian
     */
    public function getFontNameAsian(): ?string;

    public function setFontNameAsian($fontNameAsian = null);

    /**
     * it returns fontNameComplex
     *
     * @return string|null it returns fontNameComplex
     */
    public function getFontNameComplex(): ?string;

    public function setFontNameComplex($fontNameComplex = null);

    /**
     * it returns fontFamily
     *
     * @return string|null it returns fontFamily
     */
    public function getFontFamily(): ?string;

    public function setFontFamily($fontFamily = null);

    /**
     * it returns fontFamilyAsian
     *
     * @return string|null it returns fontFamilyAsian
     */
    public function getFontFamilyAsian(): ?string;

    public function setFontFamilyAsian($fontFamilyAsian = null);

    /**
     * it returns fontFamilyComplex
     *
     * @return string|null it returns fontFamilyComplex
     */
    public function getFontFamilyComplex(): ?string;

    public function setFontFamilyComplex($fontFamilyComplex = null);

    /**
     * it returns fontFamilyGeneric
     *
     * @return string|null it returns fontFamilyGeneric
     */
    public function getFontFamilyGeneric(): ?string;

    public function setFontFamilyGeneric($fontFamilyGeneric = null);

    /**
     * it returns fontFamilyGenericAsian
     *
     * @return string|null it returns fontFamilyGenericAsian
     */
    public function getFontFamilyGenericAsian(): ?string;

    public function setFontFamilyGenericAsian($fontFamilyGenericAsian = null);

    /**
     * it returns fontFamilyGenericComplex
     *
     * @return string|null it returns fontFamilyGenericComplex
     */
    public function getFontFamilyGenericComplex(): ?string;

    public function setFontFamilyGenericComplex($fontFamilyGenericComplex = null);

    /**
     * it returns fontStyleName
     *
     * @return string|null it returns fontStyleName
     */
    public function getFontStyleName(): ?string;

    public function setFontStyleName($fontStyleName = null);

    /**
     * it returns fontStyleNameAsian
     *
     * @return string|null it returns fontStyleNameAsian
     */
    public function getFontStyleNameAsian(): ?string;

    public function setFontStyleNameAsian($fontStyleNameAsian = null);

    /**
     * it returns fontStyleNameComplex
     *
     * @return string|null it returns fontStyleNameComplex
     */
    public function getFontStyleNameComplex(): ?string;

    public function setFontStyleNameComplex($fontStyleNameComplex = null);

    /**
     * it returns fontPitch
     *
     * @return string|null it returns fontPitch
     */
    public function getFontPitch(): ?string;

    public function setFontPitch($fontPitch = null);

    /**
     * it returns fontPitchAsian
     *
     * @return string|null it returns fontPitchAsian
     */
    public function getFontPitchAsian(): ?string;

    public function setFontPitchAsian($fontPitchAsian = null);

    /**
     * it returns fontPitchComplex
     *
     * @return string|null it returns fontPitchComplex
     */
    public function getFontPitchComplex(): ?string;

    public function setFontPitchComplex($fontPitchComplex = null);

    /**
     * it returns fontCharset
     *
     * @return string|null it returns fontCharset
     */
    public function getFontCharset(): ?string;

    public function setFontCharset($fontCharset = null);

    /**
     * it returns fontCharsetAsian
     *
     * @return string|null it returns fontCharsetAsian
     */
    public function getFontCharsetAsian(): ?string;

    public function setFontCharsetAsian($fontCharsetAsian = null);

    /**
     * it returns fontCharsetComplex
     *
     * @return string|null it returns fontCharsetComplex
     */
    public function getFontCharsetComplex(): ?string;

    public function setFontCharsetComplex($fontCharsetComplex = null);

    /**
     * it returns fontSize
     *
     * @return string|null it returns fontSize
     */
    public function getFontSize(): ?string;

    public function setFontSize($fontSize = null);

    /**
     * it returns fontSizeAsian
     *
     * @return string|null it returns fontSizeAsian
     */
    public function getFontSizeAsian(): ?string;

    public function setFontSizeAsian($fontSizeAsian = null);

    /**
     * it returns fontSizeComplex
     *
     * @return string|null it returns fontSizeComplex
     */
    public function getFontSizeComplex(): ?string;

    public function setFontSizeComplex($fontSizeComplex = null);

    /**
     * it returns fontSizeRel
     *
     * @return string|null it returns fontSizeRel
     */
    public function getFontSizeRel(): ?string;

    public function setFontSizeRel($fontSizeRel = null);

    /**
     * it returns fontSizeRelAsian
     *
     * @return string|null it returns fontSizeRelAsian
     */
    public function getFontSizeRelAsian(): ?string;

    public function setFontSizeRelAsian($fontSizeRelAsian = null);

    /**
     * it returns fontSizeRelComplex
     *
     * @return string|null it returns fontSizeRelComplex
     */
    public function getFontSizeRelComplex(): ?string;

    public function setFontSizeRelComplex($fontSizeRelComplex = null);

    /**
     * it returns scriptType
     *
     * @return string|null it returns scriptType
     */
    public function getScriptType(): ?string;

    public function setScriptType($scriptType = null);

    /**
     * it returns letterSpacing
     *
     * @return string|null it returns letterSpacing
     */
    public function getLetterSpacing(): ?string;

    public function setLetterSpacing($letterSpacing = null);

    /**
     * it returns language
     *
     * @return string|null it returns language
     */
    public function getLanguage(): ?string;

    public function setLanguage($language = null);

    /**
     * it returns languageAsian
     *
     * @return string|null it returns languageAsian
     */
    public function getLanguageAsian(): ?string;

    public function setLanguageAsian($languageAsian = null);

    /**
     * it returns languageComplex
     *
     * @return string|null it returns languageComplex
     */
    public function getLanguageComplex(): ?string;

    public function setLanguageComplex($languageComplex = null);

    /**
     * it returns country
     *
     * @return string|null it returns country
     */
    public function getCountry(): ?string;

    public function setCountry($country = null);

    /**
     * it returns countryAsian
     *
     * @return string|null it returns countryAsian
     */
    public function getCountryAsian(): ?string;

    public function setCountryAsian($countryAsian = null);

    /**
     * it returns countryComplex
     *
     * @return string|null it returns countryComplex
     */
    public function getCountryComplex(): ?string;

    public function setCountryComplex($countryComplex = null);

    /**
     * it returns script
     *
     * @return string|null it returns script
     */
    public function getScript(): ?string;

    public function setScript($script = null);

    /**
     * it returns scriptAsian
     *
     * @return string|null it returns scriptAsian
     */
    public function getScriptAsian(): ?string;

    public function setScriptAsian($scriptAsian = null);

    /**
     * it returns scriptComplex
     *
     * @return string|null it returns scriptComplex
     */
    public function getScriptComplex(): ?string;

    public function setScriptComplex($scriptComplex = null);

    /**
     * it returns rfcLanguageTag
     *
     * @return string|null it returns rfcLanguageTag
     */
    public function getRfcLanguageTag(): ?string;

    public function setRfcLanguageTag($rfcLanguageTag = null);

    /**
     * it returns rfcLanguageTagAsian
     *
     * @return string|null it returns rfcLanguageTagAsian
     */
    public function getRfcLanguageTagAsian(): ?string;

    public function setRfcLanguageTagAsian($rfcLanguageTagAsian = null);

    /**
     * it returns rfcLanguageTagComplex
     *
     * @return string|null it returns rfcLanguageTagComplex
     */
    public function getRfcLanguageTagComplex(): ?string;

    public function setRfcLanguageTagComplex($rfcLanguageTagComplex = null);

    /**
     * it returns fontStyle
     *
     * @return string|null it returns fontStyle
     */
    public function getFontStyle(): ?string;

    public function setFontStyle($fontStyle = null);

    /**
     * it returns fontStyleAsian
     *
     * @return string|null it returns fontStyleAsian
     */
    public function getFontStyleAsian(): ?string;

    public function setFontStyleAsian($fontStyleAsian = null);

    /**
     * it returns fontStyleComplex
     *
     * @return string|null it returns fontStyleComplex
     */
    public function getFontStyleComplex(): ?string;

    public function setFontStyleComplex($fontStyleComplex = null);

    /**
     * it returns fontRelief
     *
     * @return string|null it returns fontRelief
     */
    public function getFontRelief(): ?string;

    public function setFontRelief($fontRelief = null);

    /**
     * it returns textShadow
     *
     * @return string|null it returns textShadow
     */
    public function getTextShadow(): ?string;

    public function setTextShadow($textShadow = null);

    /**
     * it returns textUnderlineType
     *
     * @return string|null it returns textUnderlineType
     */
    public function getTextUnderlineType(): ?string;

    public function setTextUnderlineType($textUnderlineType = null);

    /**
     * it returns textUnderlineStyle
     *
     * @return string|null it returns textUnderlineStyle
     */
    public function getTextUnderlineStyle(): ?string;

    public function setTextUnderlineStyle($textUnderlineStyle = null);

    /**
     * it returns textUnderlineWidth
     *
     * @return string|null it returns textUnderlineWidth
     */
    public function getTextUnderlineWidth(): ?string;

    public function setTextUnderlineWidth($textUnderlineWidth = null);

    /**
     * it returns textUnderlineColor
     *
     * @return string|null it returns textUnderlineColor
     */
    public function getTextUnderlineColor(): ?string;

    public function setTextUnderlineColor($textUnderlineColor = null);

    /**
     * it returns textOverlineType
     *
     * @return string|null it returns textOverlineType
     */
    public function getTextOverlineType(): ?string;

    public function setTextOverlineType($textOverlineType = null);

    /**
     * it returns textOverlineStyle
     *
     * @return string|null it returns textOverlineStyle
     */
    public function getTextOverlineStyle(): ?string;

    public function setTextOverlineStyle($textOverlineStyle = null);

    /**
     * it returns textOverlineWidth
     *
     * @return string|null it returns textOverlineWidth
     */
    public function getTextOverlineWidth(): ?string;

    public function setTextOverlineWidth($textOverlineWidth = null);

    /**
     * it returns textOverlineColor
     *
     * @return string|null it returns textOverlineColor
     */
    public function getTextOverlineColor(): ?string;

    public function setTextOverlineColor($textOverlineColor = null);

    /**
     * it returns textOverlineMode
     *
     * @return string|null it returns textOverlineMode
     */
    public function getTextOverlineMode(): ?string;

    public function setTextOverlineMode($textOverlineMode = null);

    /**
     * it returns fontWeight
     *
     * @return string|null it returns fontWeight
     */
    public function getFontWeight(): ?string;

    public function setFontWeight($fontWeight = null);

    /**
     * it returns fontWeightAsian
     *
     * @return string|null it returns fontWeightAsian
     */
    public function getFontWeightAsian(): ?string;

    public function setFontWeightAsian($fontWeightAsian = null);

    /**
     * it returns fontWeightComplex
     *
     * @return string|null it returns fontWeightComplex
     */
    public function getFontWeightComplex(): ?string;

    public function setFontWeightComplex($fontWeightComplex = null);

    /**
     * it returns textUnderlineMode
     *
     * @return string|null it returns textUnderlineMode
     */
    public function getTextUnderlineMode(): ?string;

    public function setTextUnderlineMode($textUnderlineMode = null);

    /**
     * it returns textLineThroughMode
     *
     * @return string|null it returns textLineThroughMode
     */
    public function getTextLineThroughMode(): ?string;

    public function setTextLineThroughMode($textLineThroughMode = null);

    /**
     * it returns letterKerning
     *
     * @return string|null it returns letterKerning
     */
    public function getLetterKerning(): ?string;

    public function setLetterKerning($letterKerning = null);

    /**
     * it returns textBlinking
     *
     * @return string|null it returns textBlinking
     */
    public function getTextBlinking(): ?string;

    public function setTextBlinking($textBlinking = null);

    /**
     * it returns textCombine
     *
     * @return string|null it returns textCombine
     */
    public function getTextCombine(): ?string;

    public function setTextCombine($textCombine = null);

    /**
     * it returns textCombineStartChar
     *
     * @return string|null it returns textCombineStartChar
     */
    public function getTextCombineStartChar(): ?string;

    public function setTextCombineStartChar($textCombineStartChar = null);

    /**
     * it returns textCombineEndChar
     *
     * @return string|null it returns textCombineEndChar
     */
    public function getTextCombineEndChar(): ?string;

    public function setTextCombineEndChar($textCombineEndChar = null);

    /**
     * it returns textEmphasize
     *
     * @return string|null it returns textEmphasize
     */
    public function getTextEmphasize(): ?string;

    public function setTextEmphasize($textEmphasize = null);

    /**
     * it returns textScale
     *
     * @return string|null it returns textScale
     */
    public function getTextScale(): ?string;

    public function setTextScale($textScale = null);

    /**
     * it returns textRotationAngle
     *
     * @return string|null it returns textRotationAngle
     */
    public function getTextRotationAngle(): ?string;

    public function setTextRotationAngle($textRotationAngle = null);

    /**
     * it returns textRotationScale
     *
     * @return string|null it returns textRotationScale
     */
    public function getTextRotationScale(): ?string;

    public function setTextRotationScale($textRotationScale = null);

    /**
     * it returns hyphenate
     *
     * @return string|null it returns hyphenate
     */
    public function getHyphenate(): ?string;

    public function setHyphenate($hyphenate = null);

    /**
     * it returns hyphenationRemainCharCount
     *
     * @return string|null it returns hyphenationRemainCharCount
     */
    public function getHyphenationRemainCharCount(): ?string;

    public function setHyphenationRemainCharCount($hyphenationRemainCharCount = null);

    /**
     * it returns hyphenationPushCharCount
     *
     * @return string|null it returns hyphenationPushCharCount
     */
    public function getHyphenationPushCharCount(): ?string;

    public function setHyphenationPushCharCount($hyphenationPushCharCount = null);

    /**
     * it returns display
     *
     * @return string|null it returns display
     */
    public function getDisplay(): ?string;

    public function setDisplay($display);

    /**
     * it returns condition
     *
     * @return string|null it returns condition
     */
    public function getCondition(): ?string;

    public function setCondition($condition);

}
