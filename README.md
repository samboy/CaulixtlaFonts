[To view the fonts, click on this link](https://samboy.github.io/CaulixtlaFonts/)

This is the web fonts used on Samiam.org (as of 2020).  I am using
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
* SVG web fonts.  Like EOT, this is an obsolete web font format.
* The Fontforge .sfd source files (the older 2014 fonts do not have
  Fontforge source files)

To see how to use the files, look at [index.html](index.html); 
[sample.html](sample.html) has the fonts defined using a Base64 
Data-URI.

The folder `DesktopFonts` has desktop versions of the fonts, suitable
for use in word processors and other desktop programs.  The folder
`WebpageFonts` has a version of a subset of the fonts suitable for
use on a webpage (were cross-browser compatibility and small file size
is very important).  `MiscFonts` has the source fonts from which the
Desktop and Webpage fonts have been derived.
