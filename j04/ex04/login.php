<?php

include("auth.php");

if (session_start() === TRUE)
{
	if (auth($_POST['login'], $_POST['passwd']))
		$_SESSION['loggued_on_user'] = $_POST['login'];
	else
	{
		$_SESSION['loggued_on_user'] = "";
		echo "ERROR\n";
		return;
	}
}

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>42chat</title>
		<style media="screen">
			html, body {
				min-width: 942px;
			}
		</style>
	</head>
	<body>
		<iframe name="chat" src="./chat.php" width="100%" height="550px"></iframe>
		<br />
		<iframe name="speak" src="./speak.php" width="100%" height="50px"></iframe>
	</body>
</html>
