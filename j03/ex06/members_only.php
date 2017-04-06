<?php

header('WWW-Authenticate: Basic realm="Espace membres"');
header('HTTP/1.0 401 Unauthorized');

if ($_SERVER['PHP_AUTH_USER'] === 'zaz' && $_SERVER['PHP_AUTH_PW'] === 'jaimelespetitsponeys')
{
	$img42 = '../img/42.png';
	$img42 = file_get_contents($img42);
	$img42 = base64_encode($img42);
	echo '<html><body>
Bonjour Zaz<br />
<img src=\'data:image/png;base64,'.$img42.'\'>
</body></html>'."\n";
}
else
{
	header('content-type:text/html');
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
}

?>
