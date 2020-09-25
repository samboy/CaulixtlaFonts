The files are in multiple formats (not all fonts are in all formats):

* The original TTF files
* WOFF web fonts, supported by every current browser
* WOFF2 web fonts, supported by every current browser, but was not supported
  by Safari until 2016, and is not supported by Internet Explorer (but is
  supported by current versions of Edge browser)
* EOT web fonts, for Internet Explorer 8 or before.  This is an obsolete web
  font format.
* SVG web fonts.  Like EOT, this is an obsolete web font format.
* The Fontforge .sfd source files (the older 2014 fonts do not have
  Fontforge source files)

To see how to use the files, look at [index.html](index.html); 
[sample.html](sample.html) has the fonts defined using a Base64 
Data-URI.

--

Font list:

```
Amargo: A variant of Bitter, an open source slab serif font
Caulixtla008: Charis SIL roman (Bitstram Charter variant; serif)
Caulixtla009: Caulixtla008 with the "1" character updated
Caulixtla009a: Caulixtla009 with the underline position fixed
Caulixtla008-Bold: Source Sans Pro variant (Alt forms for "g" and "l"; sans)
Caulixtla008-Italic: Bitstream Charter Italic
Chortle2014f-Bold: Bitstream Charter bold [1]
MiniCaulixtla-SerifBold: Bitstream Charter bold, only letters and numbers [1]
m7x14: Windows conversion of public domain X11 "misc-fixed" font at 7x14 size
UserSmallCaps: Source Sans Pro, small caps (used only on my resume)
MiniSmallCaps: Source Sans Pro, small caps, only letters 
WTerm: Older version of Cousine/Liberation Mono with delta hinting
```

[1] The reason why the Bold version of Caulixtla008 is a different sans
    typeface is because the only page which uses actual Bitstream Charter
    bold is my resume; this reduces page load size on most of my website.
    It also makes it easier to paste or import large documents in to a word 
    processor and have the formatting be sans-for-headings serif-for-text.

--

Subsetting: The three Caulixtla008 fonts are subsetted with ASCII and a 
small subset of Unicode for writing documents in the English and Spanish
languages.  000XASCII.png shows the subsetting.

