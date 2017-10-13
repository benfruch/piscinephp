<?PHP

function auth($login, $passwd)
{
	if (!$login || !$passwd || !($tab_log = file_get_contents("../private/passwd")))
	{
		return FALSE;
	}
	$tab_log = unserialize($tab_log);
	$hash_pass = hash('whirlpool', $passwd);
	foreach ($tab_log as $elem)
	{
		if ($elem['login'] === $login && $elem['passwd'] === $hash_pass)
			return TRUE;
	}
	return FALSE;
}

?>
