<?php
$arr = [];

foreach (array_slice($argv, 1) as $arg)
	$arr = array_merge($arr, explode(" ", $arg));
sort($arr);
foreach (array_filter($arr, function ($str) { return $str != ""; }) as $arg)
	print($arg . PHP_EOL);
?>
