<?php
$soma = 0;
$i = 1;

for ($i = 1; $i <= 5 ; $i++) {
    echo "Informe a nota do aluno $i: ";
    $nota = readline();
    $soma += $nota/5;

}

echo "A média é: $soma";

?>