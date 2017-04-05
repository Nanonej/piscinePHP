<?php

function	ft_is_sort($tab)
{
	$str = implode(" ", $tab);
	sort($tab);
	$sorted = implode(" ", $tab);
	return (!strcmp($str, $sorted));
}

?>
