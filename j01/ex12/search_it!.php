#!/usr/bin/php
<?php

function	get_keys($tab)
{
	$dict = array();
	foreach ($tab as $elem)
	{
		print_r($dict);
		$tmp = explode(":", $elem);
		$dict = array_merge($dict, array(strval($tmp[0]) => strval($tmp[1])));
	}
	print_r($dict);
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
