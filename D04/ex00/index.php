<?PHP

session_start();
if ($_GET["login"] === True && $_GET["passwd"] === True && $_GET["submit"] === "OK")
{
	$_SESSION["login"] = $_GET["login"];
	$_SESSION["passwd"] = $_GET["passwd"];
}
?>
<html><body>
<form action="index.php" method="GET">
Identifiant:<br>
<input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" />
<br>
Mot de passe:<br>
<input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" />
<br><br>
<input type="submit" name="submit" value="OK"/>
</form>
</body></html>
