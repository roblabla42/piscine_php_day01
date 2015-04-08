<?php
$running = true;
$res;

print("Entrez un nombre: ");
$nbr = '';
while (fscanf(STDIN, "%s\n", $nbr))
{
	if (is_numeric($nbr))
		print("Le chiffre " . $nbr . " est " . (($nbr % 2) == 0 ? "Pair" : "Impair") . PHP_EOL);
	else
		print("'" . $nbr . "' n'est pas un chiffre" . PHP_EOL);
	print("Entrez un nombre: ");
	$nbr = '';
}
?>
