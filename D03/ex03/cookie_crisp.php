<?PHP

if ($_GET['action'] === 'set')
{
	setcookie($_GET['name'], $_GET['value'], time()+3600);
}
else if ($_GET['action'] === 'get')
{
	if ($_COOKIE[$_GET['name']] && $_GET['name'])
	{
		echo $_COOKIE[$_GET['name']];
		echo "\n";
	}
}
else if ($_GET['action'] === 'del')
{
	if ($_GET['name'])
		setcookie($_GET['name'], "", 0);
}
?>
