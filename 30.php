<?php
$valor = readline("digite quanto voçe quer:");

$notas10 = 0;
$notas2 = 0;
$deu_certo = 0;

for ($i = 0; $i * 10 <= $valor; $i++) {
    
    $resto = $valor - ($i * 10);
    

    if ($resto % 2 == 0) {
        $notas10 = $i;
        $notas2 = $resto / 2;
        $deu_certo = 1;
    }
}

if ($deu_certo == 1) {
    echo "Notas de 10: " . $notas10 . "\n";
    echo "Notas de 2: " . $notas2 . "\n";
} else {
    echo "O saque não pode ser realizado com o valor exato.\n";
}
?>
