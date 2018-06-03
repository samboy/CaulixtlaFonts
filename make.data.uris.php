#!/usr/bin/php
<?php
# Parse args
if($argc != 3 && $argc != 4) {
	print "Usage: " . $argv[0] . " {WOFF(2) font file} {font name}\n";
	exit(0);
}

# Load and base64 convert font file
$a = file_get_contents($argv[1]);
$b = base64_encode($a);

# See if this is a bold or italix font
$more = "";
if($argc == 4) {
    if(preg_match('/B/',$argv[3])) {
	$more = "font-weight: bold";
    } else {
        $more = "font-style: italic";
    }
}

# Determine MIME type
$type = "application/x-font-woff";
if(preg_match('/woff2$/',$argv[1])) {
    $type = "application/font-woff2";
}

# Output CSS
print "@font-face {\n";
print "\tfont-family: " . $argv[2] . ";\n";
print "\tsrc:url(data:" . $type . ";base64," . $b . 
	") format('woff');\n";
if($more) {
	print "\t" . $more . ";\n";
}
print "}\n";
?>
