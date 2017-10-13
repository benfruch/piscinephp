#!/usr/bin/php
<?PHP
echo "Entrez un nombre: ";
while($number = fgets(STDIN))
{
	$number = rtrim($number);
	if (is_numeric($number))
	{
		if ($number % 2 == 0)
			echo "Le chiffre $number est Pair\n";
		else
			echo "Le chiffre $number est Impair\n";
	}	
	else
		echo "'$number' nest pas un chiffre\n";
	echo "Entrez un nombre: ";
}
?>
