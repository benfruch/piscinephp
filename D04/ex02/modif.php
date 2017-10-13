<?PHP

if ($_POST['login'] && $_POST['submit'] && $_POST['oldpw'] && $_POST['submit'] == "OK" && $_POST['newpw'])
{
	if (!file_get_contents('../private/passwd'))
	{
		echo "ERROR\n";
		return ;
	}
	$file_rec = unserialize(file_get_contents('../private/passwd'));
	if ($file_rec)
	{
		//foreach ((array)$file_rec as $key => &$known)
		foreach ((array)$file_rec as $key => &$known)
		{
			if ($known['login'] === $_POST['login'])
			{
				$check_pw = hash('whirlpool', $_POST['oldpw']);
				if ($check_pw === $known['passwd'])
				{
					$new_pw = hash('whirlpool', $_POST['newpw']);
					$file_rec[$key]['passwd'] = $new_pw;
					$file_rec = serialize($file_rec);
					file_put_contents('../private/passwd', $file_rec);
					echo "OK\n";
				}
				else
				{
					echo "ERROR\n";
					return ;
				}
			}
		}
	}
}
else
	echo "ERROR\n";
?>
