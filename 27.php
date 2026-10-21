<?php
$i = 1;
$contador = 0;
for ($i = 1; $i <= 12 ; $i++) {
$faltas = readline("Informe a quantidade de faltas aluno $i: ");
if($faltas<=15){
    echo "Está dentro dos limites\n";
}

else{
    echo "Está reprovado seu burro\n";
    $contador++; 
}
 
}

echo"a quantidade de reprovados foi: $contador";
?>