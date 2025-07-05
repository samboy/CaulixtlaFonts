[To view a sample of some of the fonts, click here](https://samboy.github.io/CaulixtlaFonts/MiscFonts/Caulixtla009p/sample.html)

There is a bug in Fontforge and/or TTF Autohint where the underline position
gets zapped and reset with a default value.  To fix this:

* Open the TTF font file in Fontforge
* Go to Element → Font attributes
* Click on General
* For underline position, put in `-210`
* For height, put in `118`
* Go to File → Generate Fonts
* Generate the font as a new `.ttf` file
* Open up the font in Fontforge
* When one goes to Element → Font attributes → General, the underline position
  is `-328` and the height is `118`.

