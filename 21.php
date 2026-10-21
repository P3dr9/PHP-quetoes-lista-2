<?php
$soma = 0;
$i = 1;

for ($i = 1; $i <= 7 ; $i++) {
    echo "Informe o gasto de água em litros do dia $i: ";
    $nota = readline();
    $soma += $nota;

}

echo "o consumo de água em litros na semana é: $soma";

?>