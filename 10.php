<?php
$numero = rand( 0, 100000);
$palpite = readline("Diga um palpite: ");


while ($palpite != $numero) {
    if ($numero>$palpite) {
    echo "Errou, o número é maior ";
    $palpite = readline("Diga outro palpite: ");
}
    if ($numero<$palpite) {
    echo "Errou, o número é menor ";
    $palpite = readline("Diga outro palpite: ");
}
}

echo "Parabéns! Você acertou!";
?>