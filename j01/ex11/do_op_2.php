#!/usr/bin/php
<?php

function	check_error($arg1, $op, $arg2)
{
	if (is_null($arg1) || is_null($arg2))
		return (0);
	if (!ereg("[+%/*-]", $op))
		return (0);
	else
		return (1);
}

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	exit(1);
}
list($arg1, $op, $arg2) = sscanf($argv[1], "%d %c %d");
if (check_error($arg1, $op, $arg2))
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
