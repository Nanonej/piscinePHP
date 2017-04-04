#!/usr/bin/php
<?php

$words = array();

if ($argc > 1)
{
	$tab = array_slice($argv, 1);
	foreach ($tab as $elem)
	{
		$tmp = explode(" ", $elem);
		$tmp = array_diff($tmp, array(''));
		$words = array_merge($words, $tmp);
	}
	sort($words);
	foreach ($words as $w)
	{
		echo "$w\n";
	}
}

?>
