<?php

function is_lower($c)
{
	return ('a' <= $c && $c <= 'z');
}

function is_upper($c)
{
	return ('A' <= $c && $c <= 'Z');
}

function is_alpha($c)
{
	return (is_lower($c) || is_upper($c));
}

function is_number($c)
{
	return ('0' <= $c && $c <= '9');
}

function to_upper($c)
{
	return ((is_lower($c)) ? $c - 'a' + 'A' : $c);
}

function to_lower($c)
{
	return ((is_upper($c)) ? $c - 'A' + 'a' : $c);
}
$arr = [];

foreach (array_slice($argv, 1) as $arg)
	$arr = array_merge($arr, explode(" ", $arg));
$arr = array_filter($arr, function ($str) { return $str != ""; });
print_r($arr);
usort($arr, function ($a, $b) {
	$i = 0;
	print($a . "(" . strlen($a) . ") AND " . $b . "(" . strlen($b) . ")" . PHP_EOL);
	while ($i < strlen($a) && $i < strlen($b) && $a[$i] == $b[$i])
	{
		print($a[$i] . " == " . $b[$i] . PHP_EOL);
		$i++;
	}
	if ($i == strlen($a) && $i == strlen($b))
	{
		print("A. 0" . PHP_EOL);
		return (0);
	}
	else if ($i == strlen($a))
	{
		print("B. -1" . PHP_EOL);
		return (-1);
	}
	else if ($i == strlen($b))
	{
		print("C. 1" . PHP_EOL);
		return (1);
	}
	else if (is_alpha($a[$i]) && is_alpha($b[$i]))
	{
		print("D. " . strcasecmp($a[$i], $b[$i]) . PHP_EOL);
		return (strcasecmp($a[$i], $b[$i]));
	}
	else if (is_number($a[$i]) && is_number($b[$i]))
	{
		print("F. " . strcmp($a[$i], $b[$i]) . PHP_EOL);
		return (strcmp($a[$i], $b[$i]));
	}
	else if (is_alpha($a[$i]))
	{
		print("E. -1" . PHP_EOL);
		return (-1);
	}
	else if (is_number($a[$i]))
	{
		print("G. -1" . PHP_EOL);
		return (-1);
	}
	else 
	{
		print("H. " . strcmp($a[$i], $b[$i]) . PHP_EOL);
		return (strcmp($a[$i], $b[$i]));
	}
});
foreach ($arr as $arg)
	print($arg . PHP_EOL);
?>
