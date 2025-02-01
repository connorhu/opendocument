<?php

namespace OpenDocument\Style;

// https://docs.oasis-open.org/office/OpenDocument/v1.3/cs02/schemas/
// <style:background-image> 17.3, <style:drop-cap> 17.9 and <style:tab-stops> 17.7.
/**
 * fo:background-color 20.182,
 * fo:border 20.183.2,
 * fo:border-bottom 20.183.3
 * fo:border-left 20.183.4
 * fo:border-right 20.183.5
 * fo:border-top 20.183.6
 * fo:break-after 20.184
 * fo:break-before 20.185
 * fo:hyphenation-keep 20.196
 * fo:hyphenation-ladder-count 20.197
 * fo:keep-together 20.200
 * fo:keep-with-next 20.201
 * fo:line-height 20.204
 * fo:margin 20.205
 * fo:margin-bottom 20.206
 * fo:margin-left 20.207
 * fo:margin-right 20.208
 * fo:margin-top 20.209
 * fo:orphans 20.214
 * fo:padding 20.217
 * fo:padding-bottom 20.218
 * fo:padding-left 20.219
 * fo:padding-right 20.220
 * fo:padding-top 20.221
 * fo:text-align 20.223
 * fo:text-align-last 20.224
 * fo:text-indent 20.225
 * fo:widows 20.228
 * style:auto-text-indent 20.246
 * style:background-transparency 20.247
 * style:border-line-width 20.248
 * style:border-line-width-bottom 20.249
 * style:border-line-width-left 20.250
 * style:border-line-width-right 20.251
 * style:border-line-width-top 20.252
 * style:contextual-spacing 20.255
 * style:font-independent-line-spacing 20.276
 * style:join-border 20.300
 * style:justify-single-word 20.301
 * style:line-break 20.315
 * style:line-height-at-least 20.317
 * style:line-spacing 20.318
 * style:page-number 20.328
 * style:punctuation-wrap 20.335
 * style:register-true 20.336
 * style:shadow 20.359
 * style:snap-to-layout-grid 20.361
 * style:tab-stop-distance 20.362
 * style:text-autospace 20.365
 * style:vertical-align 20.396
 * style:writing-mode 20.404
 * style:writing-mode-automatic 20.405
 * text:line-number 20.430 and text:number-lines 20.434.
 */
class ParagraphStyle extends Style
{
    use Traits\BackgroundColorTrait;
    use Traits\BorderTrait;

    // fo:border
    // <style:graphic-properties> 17.21, <style:header-footer-properties> 17.5, <style:page-layout-properties> 17.2, <style:paragraph-properties> 17.6 and <style:table-cell-properties> 17.18.
}
