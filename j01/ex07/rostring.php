#!/usr/bin/php
<?php

if ($argc > 1)
{
	$tab = explode(" ", $argv[1]);
	$tab = array_diff($tab, array(''));
	$tab = array_merge($tab, array($tab[0]));
	$tab = array_slice($tab, 1);
	$str = implode(" ", $tab);
	echo "$str\n";
}

?>
