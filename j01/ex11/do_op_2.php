#!/usr/bin/php
<?php

function	check_error($argc, $arg1, $op, $arg2)
{
	if (!is_numeric($arg1) || !is_numeric($arg2))
		return (0);
	if (strlen($op) != 1 || !ereg("[+%/*-]", $op))
		return (0);
	else if (ereg("[/]", $op) && intval($arg2) == 0)
	{
		echo "Divide by zero Error\n";
		exit(1);
	}
	else
		return (1);
}

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	exit(1);
}
list($arg1, $op, $arg2) = sscanf($argv[1], "%d %c %d");
if (check_error($argc, $arg1, $op, $arg2))
{
	if ($op == '+')
		echo ($arg1 + $arg2)."\n";
	else if ($op == '-')
		echo ($arg1 - $arg2)."\n";
	else if ($op == '*')
		echo ($arg1 * $arg2)."\n";
	else if ($op == '/')
		echo ($arg1 / $arg2)."\n";
	else if ($op == '%')
		echo ($arg1 & $arg2)."\n";
}
else
{
	echo "Syntax Error\n";
	exit(1);
}

?>
