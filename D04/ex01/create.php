<?PHP

if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK") 
{
	if (!file_exists('../private'))
		mkdir("../private");
	if (!file_exists('../private/passwd'))
		file_put_contents('../private/passwd', '');
	$file_rec = unserialize(file_get_contents('../private/passwd'));
	if ($file_rec) 
	{
		foreach ($file_rec as $key => $known) 
		{
			if ($known['login'] === $_POST['login'])
			{
				echo "ERROR\n";
				return ;
			}
		}
	}
	$tmp['login'] = $_POST['login'];
	$tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
	$file_rec[] = $tmp;
	$file_rec = serialize($file_rec);
	file_put_contents('../private/passwd', $file_rec);
	echo "OK\n";
} 
else 
	echo "ERROR\n";
?>
