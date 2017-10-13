#!/usr/bin/php
<?PHP

function ft_split_spe($str)
{
	$tab = explode(' ', $str);
	sort($tab, SORT_NATURAL | SORT_FLAG_CASE);
	foreach ($tab as $elem)
		echo "$elem\n";
}

function ft_split($str)
{
	$tab = explode(' ', $str);
	sort($tab, SORT_STRING);
	foreach ($tab as $elem)
		echo "$elem\n";
}

function ft_split_kind($str)
{
	$tab = explode(' ', $str);
	sort($tab);
	foreach ($tab as $elem)
	{
		if (is_numeric($elem[0]))
		{
			if ($str_num)
				$str_num = $str_num. ' ' .$elem;
			else
				$str_num = $elem;
		}
		else if (ctype_alpha($elem[0]))
		{
			if ($str_alpha)
				$str_alpha = $str_alpha. ' ' .$elem;
			else
				$str_alpha = $elem;
		}
		else
		{
			if ($str_other)
				$str_other = $str_other. ' ' .$elem;
			else
				$str_other = $elem;
		}
	}
	if ($str_alpha)
		ft_split_spe($str_alpha);
	if ($str_num)
		ft_split($str_num);
	if ($str_other)
		ft_split($str_other);
}

if ($argc > 1)
{
	$i = 1;
	while ($i < $argc)
	{
		$str = $str. ' ' .$argv[$i];
		$str = trim($str);
		while (strpos($str, '  ') !== false)
			$str = str_replace("  ", ' ', $str);
		$i++;
	}
	ft_split_kind($str);
}
?>
