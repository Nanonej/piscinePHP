#!/usr/bin/php
<?php

function	check_error($argc, $argv)
{
	if ($argc != 4 || !is_numeric($argv[1]) || !is_numeric($argv[3]))
		return (0);
	$argv[2] = trim($argv[2]);
	if (strlen($argv[2]) != 1 || !ereg("[+%/*-]", $argv[2]))
		return (0);
	else if (ereg("[/]", $argv[2]) && intval($argv[3]) == 0)
		return (0);
	else
		return (1);
}

if (check_error($argc, $argv))
{
	if (trim($argv[2]) == '+')
		echo ($argv[1] + $argv[3])."\n";
	else if (trim($argv[2]) == '-')
		echo ($argv[1] - $argv[3])."\n";
	else if (trim($argv[2]) == '*')
		echo ($argv[1] * $argv[3])."\n";
	else if (trim($argv[2]) == '/')
		echo ($argv[1] / $argv[3])."\n";
	else if (trim($argv[2]) == '%')
		echo ($argv[1] & $argv[3])."\n";
}
else
	echo "Incorrect Parameters\n";

?>
