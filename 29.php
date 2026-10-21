<?php
$i = 1;
$contadorG = 0;
$contador15 = 0;
$contador25 = 0;
for ($i = 1; $i <= 8 ; $i++) {
$preço = readline("Informe o valor do pedido $i: ");
if ($preço >= 300) {
    echo "Pedido $i: Frete grátis\n";
    $contadorG++;
} elseif ($preço >= 150) {
    echo "Pedido $i: Frete de R$ 15,00\n";
    $contador15++;
} else {
    echo "Pedido $i: Frete de R$ 25,00\n";
    $contador25++;
}
 
}
echo"O tanto de fretes gratis são: $contadorG\n";
echo"O tanto de fretes de 15$ são: $contador15\n";
echo"O tanto de fretes de 25$ são: $contador25\n";
?>