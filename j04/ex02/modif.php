<?php

$i = 0;
$private = '../private/passwd';

if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] === "OK")
{
	$oldpw = hash('whirlpool', $_POST['oldpw']);
	$newpw = hash('whirlpool', $_POST['newpw']);
	$priv_file = unserialize(file_get_contents($private));
	foreach ($priv_file as $user)
	{
		if ($user['login'] == $_POST['login'])
		{
			if ($user['passwd'] === $oldpw)
			{
				$priv_file[$i]['passwd'] = $newpw;
				if (file_put_contents($private, serialize($priv_file)) !== FALSE)
				{
					echo "OK\n";
					return ;
				}
			}
		}
		$i++;
	}
}
echo "ERROR\n";

?>
