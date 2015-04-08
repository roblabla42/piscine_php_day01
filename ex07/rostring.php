<?php
if ($argc > 1)
{
	$arr = array_filter(explode(" ", $argv[1]), function($arg) { return $arg != ""; });
	foreach (array_slice($arr, 1) as $arg)
			print($arg . " ");
	if (count($arr) > 0)
		print($arr[0] . PHP_EOL);
}
?>
