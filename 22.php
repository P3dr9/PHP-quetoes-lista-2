<?php
$soma = 0;
$i = 1;

for ($i = 1; $i <= 5 ; $i++) {
    echo "Informe a quantidade de unidades vendidas  $i: ";
    $nota = readline();
    $soma += $nota;

}

echo "o total de unidades vendidas é: $soma";

?>