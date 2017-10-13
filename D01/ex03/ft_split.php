#!/usr/bin/php
<?PHP

function ft_split($str)
{
	while (strpos($str, '  ') !== false)
		$str = str_replace("  ", ' ', $str);
	$tab = explode(' ', $str);
	sort($tab, SORT_STRING);
	return $tab;
}
?>
