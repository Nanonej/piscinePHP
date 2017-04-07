<?php

include("auth.php");

if (session_start() === TRUE)
{
	if ($_GET['login'] && $_GET['passwd'])
		if (auth($_GET['login'], $_GET['passwd']))
		{
			$_SESSION['loggued_on_user'] = $_GET['login'];
			echo "OK\n";
			return ;
		}
	$_SESSION['loggued_on_user'] = "";
	echo "ERROR\n";
}

?>
