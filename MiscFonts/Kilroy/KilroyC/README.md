KilroyCweb-regular.sfd: This has special hinting used in the final
version of KilroyCweb (the numbers got the TTFautohint treatment to
deal with Windows buggy font rendering).  The italic, bold, and even
boldItalic forms don’t have hinting, and are located in the
`web/sfd/` folder.

This is a version of the kilroy font where the italic “f” is an
oblique, and where the non-bold non-italic “1” is a little taller
so that year numbers like “1974” don’t have the “1” look shorter
than other numbers. The “1” sometimes still looks shorter, especially
at smaller font sizes, but the only way to improve things at this
point is to either make the “1” sometimes taller than other numbers
or to use hinting.

The folders:

* Desktop: This version has a full regular/italic/bold/boldItalic set
  of fonts. It has support for all of Windows CP-1252, as well as
  the Esperanto language and a handful of other symbols (→, ♥, etc.).
* Web: This has support for English, Spanish, smart quotes, and a 
  couple other symbols. There is no bold nor boldItalic; this is a
  sized optimized version for putting on a web page. Also, the
  folder includes conversions of the font to a couple of obsolete web 
  formats for older browers: WOFF as well as an EOT version for Internet 
  Explorer 6, for those who want to live the web development issues of 
  2006 all over again.

Both versions have FontForge SFD files, TTF files for desktop use, and
WOFF2 as well as CSS files for web use.
