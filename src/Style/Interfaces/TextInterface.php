<?php

namespace OpenDocument\Style\Interfaces;

interface TextInterface
{
    /**
     * @return string|null returns fontVariant
     */
    public function getFontVariant(): ?string;

    public function setFontVariant(?string $fontVariant = null);

    /**
     * @return string|null returns textTransform
     */
    public function getTextTransform(): ?string;

    public function setTextTransform(?string $textTransform = null);

    /**
     * @return string|null returns color
     */
    public function getColor(): ?string;

    public function setColor(?string $color = null);

    /**
     * @return string|null returns useWindowFontColor
     */
    public function getUseWindowFontColor(): ?string;

    public function setUseWindowFontColor(?string $useWindowFontColor = null);

    /**
     * @return string|null returns textOutline
     */
    public function getTextOutline(): ?string;

    public function setTextOutline(?string $textOutline = null);

    /**
     * @return string|null returns textLineThroughType
     */
    public function getTextLineThroughType(): ?string;

    public function setTextLineThroughType(?string $textLineThroughType = null);

    /**
     * @return string|null returns textLineThroughStyle
     */
    public function getTextLineThroughStyle(): ?string;

    public function setTextLineThroughStyle(?string $textLineThroughStyle = null);

    /**
     * @return string|null returns textLineThroughWidth
     */
    public function getTextLineThroughWidth(): ?string;

    public function setTextLineThroughWidth(?string $textLineThroughWidth = null);

    /**
     * @return string|null returns textLineThroughColor
     */
    public function getTextLineThroughColor(): ?string;

    public function setTextLineThroughColor(?string $textLineThroughColor = null);

    /**
     * @return string|null returns textLineThroughText
     */
    public function getTextLineThroughText(): ?string;

    public function setTextLineThroughText(?string $textLineThroughText = null);

    /**
     * @return string|null returns textLineThroughTextStyle
     */
    public function getTextLineThroughTextStyle(): ?string;

    public function setTextLineThroughTextStyle(?string $textLineThroughTextStyle = null);

    /**
     * @return string|null returns textPosition
     */
    public function getTextPosition(): ?string;

    public function setTextPosition(?string $textPosition = null);

    /**
     * @return string|null returns fontName
     */
    public function getFontName(): ?string;

    public function setFontName(?string $fontName = null);

    /**
     * @return string|null returns fontNameAsian
     */
    public function getFontNameAsian(): ?string;

    public function setFontNameAsian(?string $fontNameAsian = null);

    /**
     * @return string|null returns fontNameComplex
     */
    public function getFontNameComplex(): ?string;

    public function setFontNameComplex(?string $fontNameComplex = null);

    /**
     * @return string|null returns fontFamily
     */
    public function getFontFamily(): ?string;

    public function setFontFamily(?string $fontFamily = null);

    /**
     * @return string|null returns fontFamilyAsian
     */
    public function getFontFamilyAsian(): ?string;

    public function setFontFamilyAsian(?string $fontFamilyAsian = null);

    /**
     * @return string|null returns fontFamilyComplex
     */
    public function getFontFamilyComplex(): ?string;

    public function setFontFamilyComplex(?string $fontFamilyComplex = null);

    /**
     * @return string|null returns fontFamilyGeneric
     */
    public function getFontFamilyGeneric(): ?string;

    public function setFontFamilyGeneric(?string $fontFamilyGeneric = null);

    /**
     * @return string|null returns fontFamilyGenericAsian
     */
    public function getFontFamilyGenericAsian(): ?string;

    public function setFontFamilyGenericAsian(?string $fontFamilyGenericAsian = null);

    /**
     * @return string|null returns fontFamilyGenericComplex
     */
    public function getFontFamilyGenericComplex(): ?string;

    public function setFontFamilyGenericComplex(?string $fontFamilyGenericComplex = null);

    /**
     * @return string|null returns fontStyleName
     */
    public function getFontStyleName(): ?string;

    public function setFontStyleName(?string $fontStyleName = null);

    /**
     * @return string|null returns fontStyleNameAsian
     */
    public function getFontStyleNameAsian(): ?string;

    public function setFontStyleNameAsian(?string $fontStyleNameAsian = null);

    /**
     * @return string|null returns fontStyleNameComplex
     */
    public function getFontStyleNameComplex(): ?string;

    public function setFontStyleNameComplex(?string $fontStyleNameComplex = null);

    /**
     * @return string|null returns fontPitch
     */
    public function getFontPitch(): ?string;

    public function setFontPitch(?string $fontPitch = null);

    /**
     * @return string|null returns fontPitchAsian
     */
    public function getFontPitchAsian(): ?string;

    public function setFontPitchAsian(?string $fontPitchAsian = null);

    /**
     * @return string|null returns fontPitchComplex
     */
    public function getFontPitchComplex(): ?string;

    public function setFontPitchComplex(?string $fontPitchComplex = null);

    /**
     * @return string|null returns fontCharset
     */
    public function getFontCharset(): ?string;

    public function setFontCharset(?string $fontCharset = null);

    /**
     * @return string|null returns fontCharsetAsian
     */
    public function getFontCharsetAsian(): ?string;

    public function setFontCharsetAsian(?string $fontCharsetAsian = null);

    /**
     * @return string|null returns fontCharsetComplex
     */
    public function getFontCharsetComplex(): ?string;

    public function setFontCharsetComplex(?string $fontCharsetComplex = null);

    /**
     * @return string|null returns fontSize
     */
    public function getFontSize(): ?string;

    public function setFontSize(?string $fontSize = null);

    /**
     * @return string|null returns fontSizeAsian
     */
    public function getFontSizeAsian(): ?string;

    public function setFontSizeAsian(?string $fontSizeAsian = null);

    /**
     * @return string|null returns fontSizeComplex
     */
    public function getFontSizeComplex(): ?string;

    public function setFontSizeComplex(?string $fontSizeComplex = null);

    /**
     * @return string|null returns fontSizeRel
     */
    public function getFontSizeRel(): ?string;

    public function setFontSizeRel(?string $fontSizeRel = null);

    /**
     * @return string|null returns fontSizeRelAsian
     */
    public function getFontSizeRelAsian(): ?string;

    public function setFontSizeRelAsian(?string $fontSizeRelAsian = null);

    /**
     * @return string|null returns fontSizeRelComplex
     */
    public function getFontSizeRelComplex(): ?string;

    public function setFontSizeRelComplex(?string $fontSizeRelComplex = null);

    /**
     * @return string|null returns scriptType
     */
    public function getScriptType(): ?string;

    public function setScriptType(?string $scriptType = null);

    /**
     * @return string|null returns letterSpacing
     */
    public function getLetterSpacing(): ?string;

    public function setLetterSpacing(?string $letterSpacing = null);

    /**
     * @return string|null returns language
     */
    public function getLanguage(): ?string;

    public function setLanguage(?string $language = null);

    /**
     * @return string|null returns languageAsian
     */
    public function getLanguageAsian(): ?string;

    public function setLanguageAsian(?string $languageAsian = null);

    /**
     * @return string|null returns languageComplex
     */
    public function getLanguageComplex(): ?string;

    public function setLanguageComplex(?string $languageComplex = null);

    /**
     * @return string|null returns country
     */
    public function getCountry(): ?string;

    public function setCountry(?string $country = null);

    /**
     * @return string|null returns countryAsian
     */
    public function getCountryAsian(): ?string;

    public function setCountryAsian(?string $countryAsian = null);

    /**
     * @return string|null returns countryComplex
     */
    public function getCountryComplex(): ?string;

    public function setCountryComplex(?string $countryComplex = null);

    /**
     * @return string|null returns script
     */
    public function getScript(): ?string;

    public function setScript(?string $script = null);

    /**
     * @return string|null returns scriptAsian
     */
    public function getScriptAsian(): ?string;

    public function setScriptAsian(?string $scriptAsian = null);

    /**
     * @return string|null returns scriptComplex
     */
    public function getScriptComplex(): ?string;

    public function setScriptComplex(?string $scriptComplex = null);

    /**
     * @return string|null returns rfcLanguageTag
     */
    public function getRfcLanguageTag(): ?string;

    public function setRfcLanguageTag(?string $rfcLanguageTag = null);

    /**
     * @return string|null returns rfcLanguageTagAsian
     */
    public function getRfcLanguageTagAsian(): ?string;

    public function setRfcLanguageTagAsian(?string $rfcLanguageTagAsian = null);

    /**
     * @return string|null returns rfcLanguageTagComplex
     */
    public function getRfcLanguageTagComplex(): ?string;

    public function setRfcLanguageTagComplex(?string $rfcLanguageTagComplex = null);

    /**
     * @return string|null returns fontStyle
     */
    public function getFontStyle(): ?string;

    public function setFontStyle(?string $fontStyle = null);

    /**
     * @return string|null returns fontStyleAsian
     */
    public function getFontStyleAsian(): ?string;

    public function setFontStyleAsian(?string $fontStyleAsian = null);

    /**
     * @return string|null returns fontStyleComplex
     */
    public function getFontStyleComplex(): ?string;

    public function setFontStyleComplex(?string $fontStyleComplex = null);

    /**
     * @return string|null returns fontRelief
     */
    public function getFontRelief(): ?string;

    public function setFontRelief(?string $fontRelief = null);

    /**
     * @return string|null returns textShadow
     */
    public function getTextShadow(): ?string;

    public function setTextShadow(?string $textShadow = null);

    /**
     * @return string|null returns textUnderlineType
     */
    public function getTextUnderlineType(): ?string;

    public function setTextUnderlineType(?string $textUnderlineType = null);

    /**
     * @return string|null returns textUnderlineStyle
     */
    public function getTextUnderlineStyle(): ?string;

    public function setTextUnderlineStyle(?string $textUnderlineStyle = null);

    /**
     * @return string|null returns textUnderlineWidth
     */
    public function getTextUnderlineWidth(): ?string;

    public function setTextUnderlineWidth(?string $textUnderlineWidth = null);

    /**
     * @return string|null returns textUnderlineColor
     */
    public function getTextUnderlineColor(): ?string;

    public function setTextUnderlineColor(?string $textUnderlineColor = null);

    /**
     * @return string|null returns textOverlineType
     */
    public function getTextOverlineType(): ?string;

    public function setTextOverlineType(?string $textOverlineType = null);

    /**
     * @return string|null returns textOverlineStyle
     */
    public function getTextOverlineStyle(): ?string;

    public function setTextOverlineStyle(?string $textOverlineStyle = null);

    /**
     * @return string|null returns textOverlineWidth
     */
    public function getTextOverlineWidth(): ?string;

    public function setTextOverlineWidth(?string $textOverlineWidth = null);

    /**
     * @return string|null returns textOverlineColor
     */
    public function getTextOverlineColor(): ?string;

    public function setTextOverlineColor(?string $textOverlineColor = null);

    /**
     * @return string|null returns textOverlineMode
     */
    public function getTextOverlineMode(): ?string;

    public function setTextOverlineMode(?string $textOverlineMode = null);

    /**
     * @return string|null returns fontWeight
     */
    public function getFontWeight(): ?string;

    public function setFontWeight(?string $fontWeight = null);

    /**
     * @return string|null returns fontWeightAsian
     */
    public function getFontWeightAsian(): ?string;

    public function setFontWeightAsian(?string $fontWeightAsian = null);

    /**
     * @return string|null returns fontWeightComplex
     */
    public function getFontWeightComplex(): ?string;

    public function setFontWeightComplex(?string $fontWeightComplex = null);

    /**
     * @return string|null returns textUnderlineMode
     */
    public function getTextUnderlineMode(): ?string;

    public function setTextUnderlineMode(?string $textUnderlineMode = null);

    /**
     * @return string|null returns textLineThroughMode
     */
    public function getTextLineThroughMode(): ?string;

    public function setTextLineThroughMode(?string $textLineThroughMode = null);

    /**
     * @return string|null returns letterKerning
     */
    public function getLetterKerning(): ?string;

    public function setLetterKerning(?string $letterKerning = null);

    /**
     * @return string|null returns textBlinking
     */
    public function getTextBlinking(): ?string;

    public function setTextBlinking(?string $textBlinking = null);

    /**
     * @return string|null returns textCombine
     */
    public function getTextCombine(): ?string;

    public function setTextCombine(?string $textCombine = null);

    /**
     * @return string|null returns textCombineStartChar
     */
    public function getTextCombineStartChar(): ?string;

    public function setTextCombineStartChar(?string $textCombineStartChar = null);

    /**
     * @return string|null returns textCombineEndChar
     */
    public function getTextCombineEndChar(): ?string;

    public function setTextCombineEndChar(?string $textCombineEndChar = null);

    /**
     * @return string|null returns textEmphasize
     */
    public function getTextEmphasize(): ?string;

    public function setTextEmphasize(?string $textEmphasize = null);

    /**
     * @return string|null returns textScale
     */
    public function getTextScale(): ?string;

    public function setTextScale(?string $textScale = null);

    /**
     * @return string|null returns textRotationAngle
     */
    public function getTextRotationAngle(): ?string;

    public function setTextRotationAngle(?string $textRotationAngle = null);

    /**
     * @return string|null returns textRotationScale
     */
    public function getTextRotationScale(): ?string;

    public function setTextRotationScale(?string $textRotationScale = null);

    /**
     * @return string|null returns hyphenate
     */
    public function getHyphenate(): ?string;

    public function setHyphenate(?string $hyphenate = null);

    /**
     * @return string|null returns hyphenationRemainCharCount
     */
    public function getHyphenationRemainCharCount(): ?string;

    public function setHyphenationRemainCharCount(?string $hyphenationRemainCharCount = null);

    /**
     * @return string|null returns hyphenationPushCharCount
     */
    public function getHyphenationPushCharCount(): ?string;

    public function setHyphenationPushCharCount(?string $hyphenationPushCharCount = null);

    /**
     * @return string|null returns display
     */
    public function getDisplay(): ?string;

    public function setDisplay(?string $display);

    /**
     * @return string|null returns condition
     */
    public function getCondition(): ?string;

    public function setCondition(?string $condition);

}
