#!/usr/bin/php
<?php

function get_ascii($char)
{
    $ascii = ord($char);
	if ($ascii >= 97 && $ascii <= 122)
		return $ascii;
	else if ($ascii >= 65 && $ascii <= 90)
		$ascii += 32;
    else if (is_numeric($char))
        $ascii += 100;
    else
        $ascii += 1000;
    return $ascii;
}

function ssap2_cmp($s1, $s2)
{
    if ($s1 == $s2)
        return 0;
    $s1_len = strlen($s1);
    $s2_len = strlen($s2);
    $i = 0;
    while ($i < $s1_len && $i < $s2_len)
    {
        $ascii_s1 = get_ascii($s1[$i]);
        $ascii_s2 = get_ascii($s2[$i]);
        if ($ascii_s1 != $ascii_s2)
            return ($ascii_s1 < $ascii_s2) ? -1 : 1;
        $i++;
    }
    if ($i == $s1_len && $i == $s2_len)
        return (0);
    return (($i == $s1_len) ? -1 : 1);
}

if ($argc > 1)
{
	$words = array();
	$tab = array_slice($argv, 1);
	foreach ($tab as $elem)
	{
		$tmp = explode(" ", $elem);
		$tmp = array_diff($tmp, array(''));
		$words = array_merge($words, $tmp);
	}
	usort($words, "ssap2_cmp");
	foreach ($words as $elem)
	{
	   echo $elem."\n";
	}
}

?>
