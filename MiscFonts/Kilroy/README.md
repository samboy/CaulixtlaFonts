Styx in 1983 made a song called “Mr. Roboto” with the lyrics “Kilroy was
here”. So this is my take on Roboto fonts.

# Kilroy1

Kilroy1: This is [Roboto Serif](https://fonts.google.com/specimen/Roboto+Serif) with only Regular/Bold/Italic/BoldItalic forms
to work in legacy word processors. This is the official Roboto Serif static
fonts at the standard “Regular” and “Bold” weights; the only thing that
has been changed are the names.

# Kilroy2

Kilroy2: This is a static rendering of Roboto Serif as follows:

* 100% width Regular (400) and bold (700) at 8pt optical size (normal and 
  italic slant)
* 100% width Regular (400) and bold (700) at 24pt optical size (normal and 
  italic slant)
* Condensed (50% width) regular at 8pt optical size (only normal slant)

# Kilroy3

This is different from Kilroy2:

* GRAD is 100 instead of 0 to make the stems a bit thicker
* Regular weight is 450 instead of 400; bold 750 instead of 700
* Widths 50%, 60%, 65%, 75%, 90%, and 100% generated (W## is the width)
* Italic for 75%, 90%, and 100% width generated. Bold for 100% generated.

This font is a lot thicker looking than Kilroy/Kilroy2; the medium is a
semi-bold and the bold is almost black. I find the default width of 
Roboto Serif pencil-thin so this is easier for my eyes to read on screens.

# Kilroy4

Kilroy4 is as follows:

* Regular and Italic is 90% width; Bold and BoldItalic 100% width
* Grade is 75%
* Weight is 400 and 700
* Optical size is 8
* Subsetted to minimize font size
* Numbers are inline tabular numbers

Kilroy4.7z has the .ttf fonts in a single compressed file. 

# Kilroy5

This is Roboto Serif rendered statically:

* At an optical size of 48, grade of +75, weight of 400/700, width of 100%,
  we render both the regular and italic fonts with the name “Kilroy5 48pt”
* At an optical size of 8, grade of +75, weight of 400/700, width of 100%,
  we render both the regular and italic fonts with the name “Kilroy5 8pt”
* At an optical size of 8, grade of +75, weight of 400, width of 60%, 65%,
  75%, 80% and 90%, we render fonts with the names Kilroy5W60/65/75/80/90 8pt.
* At an optical size of 8, grade of +75, weight of 400, width 75% and 90%,
  in italic with the names Kilroy5W75 and Kilroy5W90.

# Kilroy6

Subsetting: Windows ANSI (CP-1252) + Esperanto + a couple more symbols

Regular and Italic: 90% width, optical size 8, weight 400, grade +75

Bold and BoldItalic: This is based on the stock static TTF renderings 
of Roboto Serif (100% width, optical size 20, weight 700, grade 0 I 
believe)

# Kilroy7

This is a heavily subsetted version of Kilroy6 to minimize font loading
time; only support for English and Spanish is provided by the font. 
Instead of an infinity symbol, the special symbol is now a heart.

There is no BoldItalic; for people who want Bold Italic, use Kilroy6.

Numers are tabular and lining. Also, a bug in the Roboto Serif font 
with → is fixed.

The kerning for the bold versions is a bit off.

# Kilroy8

This is a heavily subsetted version of Kilroy6 to minimize font loading
time; only support for English and Spanish is provided by the font. 
Instead of an infinity symbol, the special symbol is now a heart.

Numers are tabular and lining. Also, a bug in the Roboto Serif font 
with → is fixed.

I had to make the ttfwidth for Kilroy8-Bold(Italic) 4 instead of 5 so that 
Firefox will always correctly load the font set.

(This is Kilroy7 with correct Kerning)

# Kilroy9

This is Kilroy8 with the “I” (and “Í”) made wider, to make it more
different from “l” (“1” already looks quite different). This is 
pretty extreme; while in Arial “I” and “l” look just like each other,
the “I” and “l” in stock Roboto Serif are just as different from each
other as, say “I” and “l” in Georgia, Noto Serif, Cambria, Constancia,
or pretty much any serif typeface. That said, there is some value in 
having “I” be even more distinct from “l”, so I will keep this work.

(This is an experiment I didn’t like but had to try)

# KilroyA

Subsetting: None (All Roboto Serif symbols included)

Regular and Italic: 90% width, optical size 8, weight 400, grade +75

Bold and BoldItalic: This is based on the stock static TTF renderings 
of Roboto Serif (100% width, optical size 20, weight 700, grade 0 I 
believe)

Numbers are tabular lining numbers instead of old-style porportional
numbers.

This is Kilroy8 with all of Roboto Serif’s symbols. Also, the → bug
has been fixed.

