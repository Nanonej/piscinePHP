#!/usr/bin/php
<?php

function	is_alpha($char)
{
	if (isset ($char))
		return (ereg("^[a-zA-Z]*$", $char) ? TRUE : FALSE);
}

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
	$alpha = array();
	$numeric = array();
	$other = array();
	foreach ($words as $w)
	{
		if (is_alpha($w[0]))
			array_push($alpha, $w);
		else if (is_numeric($w[0]))
			array_push($numeric, $w);
		else
			array_push($other, $w);
	}
	sort($alpha, SORT_NATURAL | SORT_FLAG_CASE);
	sort($numeric);
	sort($other);
	$words = array_merge($alpha, $numeric, $other);
	foreach ($words as $w)
	{
		echo "$w\n";
	}
}

?>
