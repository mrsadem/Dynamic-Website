<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<h1>Home</h1>
	<h3>
		<? if(@$_SESSION["authenticated"]) { ?>
		You are logged in!
		<br/>
		<a href="logout.php">log out</a>
		<? } else { ?>
		You are not logged in!
		<? } ?>
	</h3>
</body>
</html>