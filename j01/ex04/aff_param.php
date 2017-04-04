#!/usr/bin/php
<?php

if ($argc == 1)
	exit(0);
else
{
	$tab = array_slice($argv, 1);
	foreach ($tab as $elem)
		echo "$elem\n";
}

?>
