#!/usr/bin/php
<?PHP

if ($argc != 2)
	return ;

$str = $argv[1];
$str = trim($str);
while (strpos($str, '  ') !== false)
	$str = str_replace("  ", ' ', $str);
echo "$str\n";
?>
