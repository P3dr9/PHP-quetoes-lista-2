<?php
$i = 1;
$contadorP = 0;
$contadorM = 0;
$contadorG = 0;
for ($i = 1; $i <= 10 ; $i++) {
$peso = readline("Informe a quantidade de peso do lote $i: ");
if( $peso<=100){
    echo "lote pequeno\n";
    $contadorP++; 
}
elseif($peso>100 and $peso<=200){
    echo"lote medio\n";
    $contadorM++;
}

else{
    echo "lote grande\n";
    $contadorG++; 
}
 
}
echo"a quantidade de lotes pequenos é: $contadorP\n";
echo"a quantidade de lotes médios é: $contadorM\n";
echo"a quantidade de lotes grandes é: $contadorG\n";
?>