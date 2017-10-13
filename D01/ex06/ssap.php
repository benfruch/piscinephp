#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$tab = explode(' ', $str);
	sort($tab, SORT_STRING);
	foreach ($tab as $elem)
		echo "$elem\n";
}

if ($argc < 2)
	return ;
$i = 1;

while ($i < $argc)
{
	$str = $str. ' ' .$argv[$i];
	$str = trim($str);
	while (strpos($str, '  ') !== false)
		$str = str_replace("  ", ' ', $str);
	$i++;
}
ft_split($str);
?>
