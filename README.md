[To view the fonts, click on this link](https://samboy.github.io/CaulixtlaFonts/)

This is the web fonts used on Samiam.org (as of 2018).  I am using
my own variants of open source fonts for a number of reasons:

* I want to have a series of 100% open source fonts which look good
  on multiple systems, including Windows, MacOS, Linux, and on smart
  phones.
* I have my own custom subsetting of the fonts to minimize page load
  times.
* I have an older variant of Cousine with easier to distinguish smart
  quotes, delta hinting, and the older OFL license this font used to 
  have.
* I have a public domain port of the 7x14 version of misc fixed.
* Bitstream Charter and its Charis SIL variant are both beautiful fonts
  which are not available on Google Fonts.
* I like Source Sans Pro, but do not like how its "l" and "g" look; I
  prefer a more traditional look for documents like my resume. 

These fonts have been tested on Windows 10 (using both Chrome and browsers
with better font rendering, both with 75dpi and high resolution displays),
MacOS (using both 75dpi and high resolution displays), and on an Android
Smartphone.  They are quite readable in all systems I have tested against
(I went to a lot of effort to have ttfautohint get the hinting just
right).

--

The files are in multiple formats:

* The original TTF files
* WOFF web fonts, supported by every current browser
* WOFF2 web fonts, supported by every current browser, but was not supported
  by Safari until 2016, and is not supported by Internet Explorer (but is
  supported by current versions of Edge browser)
* EOT web fonts, for Internet Explorer 8 or before.  This is an obsolete web
  font format.
* The Fontforge .sfd source files (the older 2014 fonts do not have
  Fontforge source files)

To see how to use the files, look at [index.html](index.html); 
[sample.html](sample.html) has the fonts defined using a Base64 
Data-URI.

--

Font list:

```
Caulixtla008: Charis SIL roman (Bitstram Charter variant; serif)
Caulixtla008-Bold: Source Sans Pro variant (Alt forms for "g" and "l"; sans)
Caulixtla008-Italic: Bitstream Charter Italic
Chortle2014f-Bold: Bitstream Charter bold [1]
m7x14: Windows conversion of public domain X11 "misc-fixed" font at 7x14 size
UserSmallCaps: Source Sans Pro, small caps (used only on my resume)
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

