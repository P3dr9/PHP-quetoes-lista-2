<?php
$somaPares = 0;
$somaImpares = 0;
$numero=readline("Escreva seu numero:");

for ($numero = 1; $numero <= 50; $numero++) {
	if ($numero % 2 == 0) {
		$somaPares += $numero;
	} else {
		$somaImpares += $numero;
	}
}

echo "Soma dos números pares: $somaPares\n";
echo "Soma dos números ímpares: $somaImpares\n";
?>
