<?php
$total = 0;
$numero = 1;

while ($numero != 0) {
    $numero = readline("Digite um número (0 para encerrar): ");
    $total += $numero;
}

echo "A soma dos valores é: " . $total;
?>