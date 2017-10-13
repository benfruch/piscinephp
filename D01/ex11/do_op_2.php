#!/usr/bin/php
<?PHP

if ($argc == 2)
{
	$str = $argv[1];
	$str = trim($str);
	$str = str_replace(' ', '', $str);
	$j = 0;
	$cnt = strlen($str);
	while ($j < $cnt)
	{
		if (($str[$j] < '0' || $str[$j] > '9') && $str[$j] != '+' && $str[$j] != '-' && $str[$j] != '*' && $str[$j] != '/' && $str[$j] != '%')
		{
			echo "Syntax Error\n";
			return 0;
		}
		else
			$j++;	
	}
	$i = 0;
	if (is_numeric($str[$i]))
	{
		while (is_numeric($str[$i]))
		{
			$num1 = $num1.''.$str[$i];
			$i++;
		}
	}
	else
	{
		echo "Syntax Error\n";
		return 0;
	}
	if ($str[$i] == '+' || $str[$i] == '-' || $str[$i] == '*' || $str[$i] == '/' || $str[$i] == '%')
	{
		$cal = $str[$i];
		$i++;
	}
	else
	{
		echo "Syntax Error\n";
		return 0;
	}
	while (is_numeric($str[$i]))
	{
		$num2 = $num2.''.$str[$i];
		$i++;
	}
	if ($i != $cnt)
	{
		echo "Syntax Error\n";
		return 0;
	}
	if ($cal == '*')
		echo ($num1 * $num2)."\n";
	else if ($cal == '-')
		echo ($num1 - $num2)."\n";
	else if ($cal == '+')
		echo ($num1 + $num2)."\n";
	else if ($cal == '/')
		echo ($num1 / $num2)."\n";
	else if ($cal == '%')
		echo ($num1 % $num2)."\n";
}
else
	echo "Incorrect Parameters\n";

?>
