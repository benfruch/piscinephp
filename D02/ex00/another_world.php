#!/usr/bin/php
<?PHP

if ($argc > 1)
{
	$str = trim($argv[1]);
	$str = preg_replace('/\s\s+/', ' ', $str);
	echo "$str\n";
}

?>
