<?php
$soma = 0;
$i = 1;

for ($i = 1; $i <= 7 ; $i++) {
    echo "Informe a temperatura do dia $i: ";
    $temperatura = readline();
    $soma += $temperatura/7;
    if ($i == 1 || $temperatura > $max) {
        $max = $temperatura;
    }
}

echo "A média é: $soma, a maior temperatura:$max";

?>