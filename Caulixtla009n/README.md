This is Caulixtla009a with `ttfautohint` applied to the fonts in a way
to improve their look on low-resolution displays while not changing 
how they look in higher resolution displays:

* The fonts are hinted with ttfautohint version 1.8.3.  “Hinting limit”
  was set to “24” so that the hinting only affects low-dpi displays.
  “No x Height Increase” was checked, and “x Height Snapping Exceptions”
  was set to be a dash (“-”), so that the fonts are the same size as 
  before.  

* Using Fontforge, I removed hinting from the “i” and “j” letters (as well 
  as all of the accented lower case letters) to fix an issue where the dot
  is moved up by ttfautohint.

* I used `sfnt2woff-zopfli` to make the `.woff` file as small as possible.
