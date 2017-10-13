#!/usr/bin/php
<?PHP

if ($argc == 4)
{
	$str1 = $argv[1];
	$str1 = trim($str1);
	$i = intval($str1);

	$str2 = $argv[2];
	$str2 = trim($str2);

	$str3 = $argv[3];
	$str3 = trim($str3);
	$j = intval($str3);

	if ($str2[0] == '*')
		echo ($i * $j)."\n";
	else if ($str2[0] == '-')
		echo ($i - $j)."\n";
	else if ($str2[0] == '+')
		echo ($i + $j)."\n";
	else if ($str2[0] == '/')
		echo ($i / $j)."\n";
	else if ($str2[0] == '%')
		echo ($i % $j)."\n";
}
else
	echo "Incorrect Parameters\n";
?>
