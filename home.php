<?
	session_start();

	define("USER", "santo");
	define("PASS", "011233");

	if (isset($_POST["user"]) && isset($_POST["pass"]))
	{
		if ($_POST["user"] == USER && $_POST["pass"] == PASS)
		{
			$_SESSION["authenticated"] = TRUE;

			$host = $_SERVER["HTTP_HOST"];
			$path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
			header("Location: http://" + $host + $path + "/home.php");
			exit;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<h1>Home</h1>
	<h3>
		<? if(@$_SESSION["authenticated"]) {	?>
		You are logged in!
		<br/>
		<a href="logout.php">log out</a>
		<? } else { ?>
		You are not logged in!
		<? } ?>
	</h3>
</body>
</html>