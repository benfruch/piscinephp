#!/usr/bin/php
<?PHP

function ft_is_sort($tab)
{
	$tab_two = $tab;
	sort($tab, SORT_STRING);
	$j = count($tab);
	$i = 0;
	while ($i < $j)
	{
		if ($tab[$i] != $tab_two[$i])
			return FALSE;
		else
			$i++;
	}
	return TRUE;
}
?>
