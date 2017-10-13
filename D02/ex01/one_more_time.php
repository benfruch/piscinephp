#!/usr/bin/php
<?PHP

date_default_timezone_set("Europe/Paris");
if ($argc == 2)
{
	$str = $argv[1];
	$tab = explode(' ', $str);
	if (count($tab) != 5)
	{
		echo "Wrong Format\n";
		return 0;
	}
	preg_match("/([lL]undi)|([mM]ardi)|([mM]ercredi)|([jJ]eudi)|([vV]endredi)|([sS]amedi)|([dD]imanche)/", $tab[0]);
	preg_match("/([0-9]{1,2})/", $tab[1]);
	preg_match("/([Jj]anvier)|([Ff]evrier)|([mM]ars)|([aA]vril)|([mM]ai)|([jJ]uin)|([jJ]uillet)|([aA]out)|([sS]eptembre)|([oO]ctobre)|([nN]ovembre)|([dD]ecembre)/", $tab[2]);
	if ($tab[2] === "Janvier" || $tab[2] === "janvier")
		$month = 1;
	if ($tab[2] === "Fevrier" || $tab[2] === "fevrier")
		$month = 2;
	if ($tab[2] === "Mars" || $tab[2] === "mars")
		$month = 3;
	if ($tab[2] === "Avril" || $tab[2] === "avril")
		$month = 4;
	if ($tab[2] === "Mai" || $tab[2] === "mai")
		$month = 5;
	if ($tab[2] === "Juin" || $tab[2] === "juin")
		$month = 6;
	if ($tab[2] === "Juillet" || $tab[2] === "juillet")
		$month = 7;
	if ($tab[2] === "Aout" || $tab[2] === "aout")
		$month = 8;
	if ($tab[2] === "Septembre" || $tab[2] === "septembre")
		$month = 9;
	if ($tab[2] === "Octobre" || $tab[2] === "octobre")
		$month = 10;
	if ($tab[2] === "Novembre" || $tab[2] === "novembre")
		$month = 11;
	if ($tab[2] === "Decembre" || $tab[2] === "decembre")
		$month = 12;
	preg_match("/([0-9]{4})/", $tab[3]);
	$heure = explode(':', $tab[4]);
	if (count($heure) != 3)
	{
		echo "Wrong Format\n";
		return ;
	}
	preg_match("/([0-9]{2})/", $heure[0]);
	preg_match("/([0-9]{2})/", $heure[1]);
	preg_match("/([0-9]{2})/", $heure[2]);
	$result = mktime($heure[0], $heure[1], $heure[2], $month, $tab[1], $tab[3]);
	echo "$result";
}

?>
