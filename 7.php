<?php
$soma = 0;
$contador = 1;

while ($contador <= 5) {
    echo "Informe a nota do aluno $contador: ";
    $nota = readline();
    $soma += $nota;
    $contador++;
}

echo "Soma das notas: $soma";

?>