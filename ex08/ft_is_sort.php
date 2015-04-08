<?php
function ft_is_sort($arr)
{
	$newarr = array_unique($arr);
	sort($newarr);
	return ($newarr === $arr);
}
?>
