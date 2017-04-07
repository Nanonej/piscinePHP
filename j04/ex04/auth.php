<?php

function	auth($login, $passwd)
{
	$private = '../private/passwd';

	if ($login && $passwd)
	{
		$passwd = hash('whirlpool', $passwd);
		$priv_file = unserialize(file_get_contents($private));
		foreach ($priv_file as $user)
			if ($user['login'] == $login)
				if ($user['passwd'] === $passwd)
					return (TRUE);
	}
	return (FALSE);
}

?>
