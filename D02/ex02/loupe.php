#!/usr/bin/php
<?PHP

function first($str)
{
	$ret = preg_replace("/$str[2]/", strtoupper($str[2]), $str[0]);
	return $ret;
}

function second($str)
{
	$str[0] = preg_replace("/$str[3]/", strtoupper($str[3]), $str[0]);
	$str[0] = preg_replace("/$str[7]/", strtoupper($str[7]), $str[0]);
	$str[0] = preg_replace("/$str[4]/", strtolower($str[4]), $str[0]);
	$str[0] = preg_replace("/$str[5]/", strtoupper($str[5]), $str[0]);
	return $str[0];
}

function third($str)
{
	$str = preg_replace("/$str[2]/", strtoupper($str[2]), $str[0]);
	return $str;
}

if ($argc == 2)
{
	$tab = file($argv[1]);

	foreach ($tab as $elem)
	{
		$str = preg_replace_callback("/(<a href=.+>(.+)<\/a>)/U", first, $elem);
		$str = preg_replace_callback("/(<a href=.+>((.*)(<.*>)(.*))*<\/a>)/U", second, $str);
		$str = preg_replace_callback("/<a href=(.*)title=\"(.+)\"/", third, $str);
		echo $str;
	}
}
?>
