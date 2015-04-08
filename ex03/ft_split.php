<?php

function ft_split($str)
{
	$x = array_filter(explode(' ', $str), function ($str) { return $str != ""; });
	sort($x);
	return $x;
}
?>
