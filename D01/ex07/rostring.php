#!/usr/bin/php
<?PHP

if ($argc < 2)
	return ;

$str = $argv[1];
while (strpos($str, '  ') !== false)
	$str = str_replace("  ", ' ', $str);
$tab = explode(' ', $str);
$first = $tab[0];
unset($tab[0]);
foreach ($tab as $elem)
	echo "$elem ";
echo "$first\n";

?>
