<?php

if ($_GET['action'] === 'set')
{
	if (!setcookie($_GET['name'], $_GET['value'], time() + 3600))
		echo "Error failed to set Cookie\n";
}
else if ($_GET['action'] === 'get' && $_COOKIE[$_GET['name']])
	echo $_COOKIE[$_GET['name']] . "\n";
else if ($_GET['action'] === 'del')
{
	if (!setcookie($_GET['name'], '', time() - 3600))
		echo "Error failed to del Cookie\n";
}

?>
