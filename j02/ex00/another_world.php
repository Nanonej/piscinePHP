#!/usr/bin/php
<?php

if($argc > 1)
{
	if (!is_null($argv[1]))
	{
		$tab = preg_split("/[\t ]+/", $argv[1]);
		$tab = array_diff($tab, array(''));
		$str = implode(" ", $tab);
		echo "$str\n";
	}
}

?>
