#!/usr/bin/php
<?php

function	get_keys($tab)
{
	$dict = array();
	foreach ($tab as $elem)
	{
		$tmp = explode(":", $elem);
		$dict = array_merge($dict, array($tmp[0] => $tmp[1]));
	}
	return ($dict);
}
if ($argv > 2)
{
	$search = $argv[1];
	$tab = array_slice($argv, 2);
	$dict = get_keys($tab);
	if (array_key_exists($search, $dict))
	{
		foreach ($dict as $key => $value)
		{
			if ($key == $search)
				echo ($value."\n");
		}
	}
}

?>
