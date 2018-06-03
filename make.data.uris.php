<?php
# We use WOFF, not WOFF 2 for maximum cross browser compatibility
if($argc != 3) {
	print "Usage: " . $argv[0] . " {WOFF font file} {font name}\n";
	exit(0);
}
$a = file_get_contents($argv[1]);
$b = base64_encode($a);
print "@font-face {";
print "\tfont-family: " . $argv[2] . ";\n";
print "\tsrc:url(data:application/x-font-woff;base64," . $b . 
	") format('woff');\n";
print "}";
?>
