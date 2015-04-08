<?php

if ($argc == 2)
	print(implode(" ", array_filter(explode(" ", $argv[1]), function ($str) { return ($str != ""); })) . PHP_EOL);
?>
