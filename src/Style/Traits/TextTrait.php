<?php

namespace OpenDocument\Style\Traits;

trait TextTrait
{
    protected ?string $fontVariant = null;

    protected ?string $textTransform = null;

    protected ?string $color = null;

    protected ?bool $useWindowFontColor = null;

    protected ?bool $textOutline = null;

    protected ?string $textLineThroughType = null;

    protected ?string $textLineThroughStyle = null;

    protected ?string $textLineThroughWidth = null;

    protected ?string $textLineThroughColor = null;

    protected ?string $textLineThroughText = null;

    protected ?string $textLineThroughTextStyle = null;

    protected ?string $textPosition = null;

    protected ?string $fontName = null;

    protected ?string $fontNameAsian = null;

    protected ?string $fontNameComplex = null;

    protected ?string $fontFamily = null;

    protected ?string $fontFamilyAsian = null;

    protected ?string $fontFamilyComplex = null;

    protected ?string $fontFamilyGeneric = null;

    protected ?string $fontFamilyGenericAsian = null;

    protected ?string $fontFamilyGenericComplex = null;

    protected ?string $fontStyleName = null;

    protected ?string $fontStyleNameAsian = null;

    protected ?string $fontStyleNameComplex = null;

    protected ?string $fontPitch = null;

    protected ?string $fontPitchAsian = null;

    protected ?string $fontPitchComplex = null;

    protected ?string $fontCharset = null;

    protected ?string $fontCharsetAsian = null;

    protected ?string $fontCharsetComplex = null;

    protected ?string $fontSize = null;

    protected ?string $fontSizeAsian = null;

    protected ?string $fontSizeComplex = null;

    protected ?string $fontSizeRel = null;

    protected ?string $fontSizeRelAsian = null;

    protected ?string $fontSizeRelComplex = null;

    protected ?string $scriptType = null;

    protected ?string $letterSpacing = null;

    protected ?string $language = null;

    protected ?string $languageAsian = null;

    protected ?string $languageComplex = null;

    protected ?string $country = null;

    protected ?string $countryAsian = null;

    protected ?string $countryComplex = null;

    protected ?string $script = null;

    protected ?string $scriptAsian = null;

    protected ?string $scriptComplex = null;

    protected ?string $rfcLanguageTag = null;

    protected ?string $rfcLanguageTagAsian = null;

    protected ?string $rfcLanguageTagComplex = null;

    protected ?string $fontStyle = null;

    protected ?string $fontStyleAsian = null;

    protected ?string $fontStyleComplex = null;

    protected ?string $fontRelief = null;

    protected ?string $textShadow = null;

    protected ?string $textUnderlineType = null;

    protected ?string $textUnderlineStyle = null;

    protected ?string $textUnderlineWidth = null;

    protected ?string $textUnderlineColor = null;

    protected ?string $textOverlineType = null;

    protected ?string $textOverlineStyle = null;

    protected ?string $textOverlineWidth = null;

    protected ?string $textOverlineColor = null;

    protected ?string $textOverlineMode = null;

    protected ?string $fontWeight = null;

    protected ?string $fontWeightAsian = null;

    protected ?string $fontWeightComplex = null;

    protected ?string $textUnderlineMode = null;

    protected ?string $textLineThroughMode = null;

    protected ?bool $letterKerning = null;

    protected ?bool $textBlinking = null;

    protected ?string $textCombine = null;

    protected ?string $textCombineStartChar = null;

    protected ?string $textCombineEndChar = null;

    protected ?string $textEmphasize = null;

    protected ?string $textScale = null;

    protected ?string $textRotationAngle = null;

    protected ?string $textRotationScale = null;

    protected ?bool $hyphenate = null;

    protected ?string $hyphenationRemainCharCount = null;

    protected ?string $hyphenationPushCharCount = null;

    protected string $display;

    protected string $condition;

    /**
     * @return string|null
     */
    public function getFontVariant(): ?string
    {
        return $this->fontVariant;
    }

    public function setFontVariant(?string $fontVariant = null)
    {
        $this->fontVariant = $fontVariant;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextTransform(): ?string
    {
        return $this->textTransform;
    }

    public function setTextTransform(?string $textTransform = null)
    {
        $this->textTransform = $textTransform;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color = null)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getUseWindowFontColor(): ?bool
    {
        return $this->useWindowFontColor;
    }

    public function setUseWindowFontColor(?bool $useWindowFontColor = null)
    {
        $this->useWindowFontColor = $useWindowFontColor;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTextOutline(): ?bool
    {
        return $this->textOutline;
    }

    public function setTextOutline(?bool $textOutline = null)
    {
        $this->textOutline = $textOutline;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextLineThroughType(): ?string
    {
        return $this->textLineThroughType;
    }

    public function setTextLineThroughType(?string $textLineThroughType = null)
    {
        $this->textLineThroughType = $textLineThroughType;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextLineThroughStyle(): ?string
    {
        return $this->textLineThroughStyle;
    }

    public function setTextLineThroughStyle(?string $textLineThroughStyle = null)
    {
        $this->textLineThroughStyle = $textLineThroughStyle;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextLineThroughWidth(): ?string
    {
        return $this->textLineThroughWidth;
    }

    public function setTextLineThroughWidth(?string $textLineThroughWidth = null)
    {
        $this->textLineThroughWidth = $textLineThroughWidth;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextLineThroughColor(): ?string
    {
        return $this->textLineThroughColor;
    }

    public function setTextLineThroughColor(?string $textLineThroughColor = null)
    {
        $this->textLineThroughColor = $textLineThroughColor;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextLineThroughText(): ?string
    {
        return $this->textLineThroughText;
    }

    public function setTextLineThroughText(?string $textLineThroughText = null)
    {
        $this->textLineThroughText = $textLineThroughText;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextLineThroughTextStyle(): ?string
    {
        return $this->textLineThroughTextStyle;
    }

    public function setTextLineThroughTextStyle(?string $textLineThroughTextStyle = null)
    {
        $this->textLineThroughTextStyle = $textLineThroughTextStyle;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextPosition(): ?string
    {
        return $this->textPosition;
    }

    public function setTextPosition(?string $textPosition = null)
    {
        $this->textPosition = $textPosition;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontName(): ?string
    {
        return $this->fontName;
    }

    public function setFontName(?string $fontName = null)
    {
        $this->fontName = $fontName;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontNameAsian(): ?string
    {
        return $this->fontNameAsian;
    }

    public function setFontNameAsian(?string $fontNameAsian = null)
    {
        $this->fontNameAsian = $fontNameAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontNameComplex(): ?string
    {
        return $this->fontNameComplex;
    }

    public function setFontNameComplex(?string $fontNameComplex = null)
    {
        $this->fontNameComplex = $fontNameComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontFamily(): ?string
    {
        return $this->fontFamily;
    }

    public function setFontFamily(?string $fontFamily = null)
    {
        $this->fontFamily = $fontFamily;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontFamilyAsian(): ?string
    {
        return $this->fontFamilyAsian;
    }

    public function setFontFamilyAsian(?string $fontFamilyAsian = null)
    {
        $this->fontFamilyAsian = $fontFamilyAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontFamilyComplex(): ?string
    {
        return $this->fontFamilyComplex;
    }

    public function setFontFamilyComplex(?string $fontFamilyComplex = null)
    {
        $this->fontFamilyComplex = $fontFamilyComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontFamilyGeneric(): ?string
    {
        return $this->fontFamilyGeneric;
    }

    public function setFontFamilyGeneric(?string $fontFamilyGeneric = null)
    {
        $this->fontFamilyGeneric = $fontFamilyGeneric;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontFamilyGenericAsian(): ?string
    {
        return $this->fontFamilyGenericAsian;
    }

    public function setFontFamilyGenericAsian(?string $fontFamilyGenericAsian = null)
    {
        $this->fontFamilyGenericAsian = $fontFamilyGenericAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontFamilyGenericComplex(): ?string
    {
        return $this->fontFamilyGenericComplex;
    }

    public function setFontFamilyGenericComplex(?string $fontFamilyGenericComplex = null)
    {
        $this->fontFamilyGenericComplex = $fontFamilyGenericComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontStyleName(): ?string
    {
        return $this->fontStyleName;
    }

    public function setFontStyleName(?string $fontStyleName = null)
    {
        $this->fontStyleName = $fontStyleName;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontStyleNameAsian(): ?string
    {
        return $this->fontStyleNameAsian;
    }

    public function setFontStyleNameAsian(?string $fontStyleNameAsian = null)
    {
        $this->fontStyleNameAsian = $fontStyleNameAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontStyleNameComplex(): ?string
    {
        return $this->fontStyleNameComplex;
    }

    public function setFontStyleNameComplex(?string $fontStyleNameComplex = null)
    {
        $this->fontStyleNameComplex = $fontStyleNameComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontPitch(): ?string
    {
        return $this->fontPitch;
    }

    public function setFontPitch(?string $fontPitch = null)
    {
        $this->fontPitch = $fontPitch;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontPitchAsian(): ?string
    {
        return $this->fontPitchAsian;
    }

    public function setFontPitchAsian(?string $fontPitchAsian = null)
    {
        $this->fontPitchAsian = $fontPitchAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontPitchComplex(): ?string
    {
        return $this->fontPitchComplex;
    }

    public function setFontPitchComplex(?string $fontPitchComplex = null)
    {
        $this->fontPitchComplex = $fontPitchComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontCharset(): ?string
    {
        return $this->fontCharset;
    }

    public function setFontCharset(?string $fontCharset = null)
    {
        $this->fontCharset = $fontCharset;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontCharsetAsian(): ?string
    {
        return $this->fontCharsetAsian;
    }

    public function setFontCharsetAsian(?string $fontCharsetAsian = null)
    {
        $this->fontCharsetAsian = $fontCharsetAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontCharsetComplex(): ?string
    {
        return $this->fontCharsetComplex;
    }

    public function setFontCharsetComplex(?string $fontCharsetComplex = null)
    {
        $this->fontCharsetComplex = $fontCharsetComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontSize(): ?string
    {
        return $this->fontSize;
    }

    public function setFontSize(?string $fontSize = null)
    {
        $this->fontSize = $fontSize;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontSizeAsian(): ?string
    {
        return $this->fontSizeAsian;
    }

    public function setFontSizeAsian(?string $fontSizeAsian = null)
    {
        $this->fontSizeAsian = $fontSizeAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontSizeComplex(): ?string
    {
        return $this->fontSizeComplex;
    }

    public function setFontSizeComplex(?string $fontSizeComplex = null)
    {
        $this->fontSizeComplex = $fontSizeComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontSizeRel(): ?string
    {
        return $this->fontSizeRel;
    }

    public function setFontSizeRel(?string $fontSizeRel = null)
    {
        $this->fontSizeRel = $fontSizeRel;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontSizeRelAsian(): ?string
    {
        return $this->fontSizeRelAsian;
    }

    public function setFontSizeRelAsian(?string $fontSizeRelAsian = null)
    {
        $this->fontSizeRelAsian = $fontSizeRelAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontSizeRelComplex(): ?string
    {
        return $this->fontSizeRelComplex;
    }

    public function setFontSizeRelComplex(?string $fontSizeRelComplex = null)
    {
        $this->fontSizeRelComplex = $fontSizeRelComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScriptType(): ?string
    {
        return $this->scriptType;
    }

    public function setScriptType(?string $scriptType = null)
    {
        $this->scriptType = $scriptType;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLetterSpacing(): ?string
    {
        return $this->letterSpacing;
    }

    public function setLetterSpacing(?string $letterSpacing = null)
    {
        $this->letterSpacing = $letterSpacing;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language = null)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguageAsian(): ?string
    {
        return $this->languageAsian;
    }

    public function setLanguageAsian(?string $languageAsian = null)
    {
        $this->languageAsian = $languageAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguageComplex(): ?string
    {
        return $this->languageComplex;
    }

    public function setLanguageComplex(?string $languageComplex = null)
    {
        $this->languageComplex = $languageComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country = null)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryAsian(): ?string
    {
        return $this->countryAsian;
    }

    public function setCountryAsian(?string $countryAsian = null)
    {
        $this->countryAsian = $countryAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryComplex(): ?string
    {
        return $this->countryComplex;
    }

    public function setCountryComplex(?string $countryComplex = null)
    {
        $this->countryComplex = $countryComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScript(): ?string
    {
        return $this->script;
    }

    public function setScript(?string $script = null)
    {
        $this->script = $script;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScriptAsian(): ?string
    {
        return $this->scriptAsian;
    }

    public function setScriptAsian(?string $scriptAsian = null)
    {
        $this->scriptAsian = $scriptAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScriptComplex(): ?string
    {
        return $this->scriptComplex;
    }

    public function setScriptComplex(?string $scriptComplex = null)
    {
        $this->scriptComplex = $scriptComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRfcLanguageTag(): ?string
    {
        return $this->rfcLanguageTag;
    }

    public function setRfcLanguageTag(?string $rfcLanguageTag = null)
    {
        $this->rfcLanguageTag = $rfcLanguageTag;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRfcLanguageTagAsian(): ?string
    {
        return $this->rfcLanguageTagAsian;
    }

    public function setRfcLanguageTagAsian(?string $rfcLanguageTagAsian = null)
    {
        $this->rfcLanguageTagAsian = $rfcLanguageTagAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRfcLanguageTagComplex(): ?string
    {
        return $this->rfcLanguageTagComplex;
    }

    public function setRfcLanguageTagComplex(?string $rfcLanguageTagComplex = null)
    {
        $this->rfcLanguageTagComplex = $rfcLanguageTagComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontStyle(): ?string
    {
        return $this->fontStyle;
    }

    public function setFontStyle(?string $fontStyle = null)
    {
        $this->fontStyle = $fontStyle;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontStyleAsian(): ?string
    {
        return $this->fontStyleAsian;
    }

    public function setFontStyleAsian(?string $fontStyleAsian = null)
    {
        $this->fontStyleAsian = $fontStyleAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontStyleComplex(): ?string
    {
        return $this->fontStyleComplex;
    }

    public function setFontStyleComplex(?string $fontStyleComplex = null)
    {
        $this->fontStyleComplex = $fontStyleComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontRelief(): ?string
    {
        return $this->fontRelief;
    }

    public function setFontRelief(?string $fontRelief = null)
    {
        $this->fontRelief = $fontRelief;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextShadow(): ?string
    {
        return $this->textShadow;
    }

    public function setTextShadow(?string $textShadow = null)
    {
        $this->textShadow = $textShadow;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextUnderlineType(): ?string
    {
        return $this->textUnderlineType;
    }

    public function setTextUnderlineType(?string $textUnderlineType = null)
    {
        $this->textUnderlineType = $textUnderlineType;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextUnderlineStyle(): ?string
    {
        return $this->textUnderlineStyle;
    }

    public function setTextUnderlineStyle(?string $textUnderlineStyle = null)
    {
        $this->textUnderlineStyle = $textUnderlineStyle;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextUnderlineWidth(): ?string
    {
        return $this->textUnderlineWidth;
    }

    public function setTextUnderlineWidth(?string $textUnderlineWidth = null)
    {
        $this->textUnderlineWidth = $textUnderlineWidth;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextUnderlineColor(): ?string
    {
        return $this->textUnderlineColor;
    }

    public function setTextUnderlineColor(?string $textUnderlineColor = null)
    {
        $this->textUnderlineColor = $textUnderlineColor;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextOverlineType(): ?string
    {
        return $this->textOverlineType;
    }

    public function setTextOverlineType(?string $textOverlineType = null)
    {
        $this->textOverlineType = $textOverlineType;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextOverlineStyle(): ?string
    {
        return $this->textOverlineStyle;
    }

    public function setTextOverlineStyle(?string $textOverlineStyle = null)
    {
        $this->textOverlineStyle = $textOverlineStyle;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextOverlineWidth(): ?string
    {
        return $this->textOverlineWidth;
    }

    public function setTextOverlineWidth(?string $textOverlineWidth = null)
    {
        $this->textOverlineWidth = $textOverlineWidth;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextOverlineColor(): ?string
    {
        return $this->textOverlineColor;
    }

    public function setTextOverlineColor(?string $textOverlineColor = null)
    {
        $this->textOverlineColor = $textOverlineColor;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextOverlineMode(): ?string
    {
        return $this->textOverlineMode;
    }

    public function setTextOverlineMode(?string $textOverlineMode = null)
    {
        $this->textOverlineMode = $textOverlineMode;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontWeight(): ?string
    {
        return $this->fontWeight;
    }

    public function setFontWeight(?string $fontWeight = null)
    {
        $this->fontWeight = $fontWeight;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontWeightAsian(): ?string
    {
        return $this->fontWeightAsian;
    }

    public function setFontWeightAsian(?string $fontWeightAsian = null)
    {
        $this->fontWeightAsian = $fontWeightAsian;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontWeightComplex(): ?string
    {
        return $this->fontWeightComplex;
    }

    public function setFontWeightComplex(?string $fontWeightComplex = null)
    {
        $this->fontWeightComplex = $fontWeightComplex;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextUnderlineMode(): ?string
    {
        return $this->textUnderlineMode;
    }

    public function setTextUnderlineMode(?string $textUnderlineMode = null)
    {
        $this->textUnderlineMode = $textUnderlineMode;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextLineThroughMode(): ?string
    {
        return $this->textLineThroughMode;
    }

    public function setTextLineThroughMode(?string $textLineThroughMode = null)
    {
        $this->textLineThroughMode = $textLineThroughMode;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLetterKerning(): ?bool
    {
        return $this->letterKerning;
    }

    public function setLetterKerning(?bool $letterKerning = null)
    {
        $this->letterKerning = $letterKerning;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTextBlinking(): ?bool
    {
        return $this->textBlinking;
    }

    public function setTextBlinking(?bool $textBlinking = null)
    {
        $this->textBlinking = $textBlinking;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextCombine(): ?string
    {
        return $this->textCombine;
    }

    public function setTextCombine(?string $textCombine = null)
    {
        $this->textCombine = $textCombine;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextCombineStartChar(): ?string
    {
        return $this->textCombineStartChar;
    }

    public function setTextCombineStartChar(?string $textCombineStartChar = null)
    {
        $this->textCombineStartChar = $textCombineStartChar;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextCombineEndChar(): ?string
    {
        return $this->textCombineEndChar;
    }

    public function setTextCombineEndChar(?string $textCombineEndChar = null)
    {
        $this->textCombineEndChar = $textCombineEndChar;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextEmphasize(): ?string
    {
        return $this->textEmphasize;
    }

    public function setTextEmphasize(?string $textEmphasize = null)
    {
        $this->textEmphasize = $textEmphasize;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextScale(): ?string
    {
        return $this->textScale;
    }

    public function setTextScale(?string $textScale = null)
    {
        $this->textScale = $textScale;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextRotationAngle(): ?string
    {
        return $this->textRotationAngle;
    }

    public function setTextRotationAngle(?string $textRotationAngle = null)
    {
        $this->textRotationAngle = $textRotationAngle;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextRotationScale(): ?string
    {
        return $this->textRotationScale;
    }

    public function setTextRotationScale(?string $textRotationScale = null)
    {
        $this->textRotationScale = $textRotationScale;
    
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHyphenate(): ?bool
    {
        return $this->hyphenate;
    }

    public function setHyphenate(?bool $hyphenate = null)
    {
        $this->hyphenate = $hyphenate;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHyphenationRemainCharCount(): ?string
    {
        return $this->hyphenationRemainCharCount;
    }

    public function setHyphenationRemainCharCount(?string $hyphenationRemainCharCount = null)
    {
        $this->hyphenationRemainCharCount = $hyphenationRemainCharCount;
    
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHyphenationPushCharCount(): ?string
    {
        return $this->hyphenationPushCharCount;
    }

    public function setHyphenationPushCharCount(?string $hyphenationPushCharCount = null)
    {
        $this->hyphenationPushCharCount = $hyphenationPushCharCount;
    
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplay(): string
    {
        return $this->display;
    }

    public function setDisplay(string $display)
    {
        $this->display = $display;
    
        return $this;
    }

    /**
     * @return string
     */
    public function getCondition(): string
    {
        return $this->condition;
    }

    public function setCondition(string $condition)
    {
        $this->condition = $condition;
    
        return $this;
    }

}
