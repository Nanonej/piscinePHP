#!/usr/bin/php
<?php

if ($argc == 2 && !is_null($argv[1]) && is_string($argv[1]))
{
	$tab = explode(" ", $argv[1]);
	$tab = array_diff($tab, array(''));
	$str = implode(" ", $tab);
	echo "$str\n";
}

?>
