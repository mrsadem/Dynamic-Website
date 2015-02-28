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
			header("Location: http://'$host''$path'/home.php");
			exit;
		}
	}