<?php
$qtdModelos = readline("quantos Modelos: ");
$qtdTestes = readline("quantus Testes: ");

$maiorMedia = -1;
$melhorModelo = 0;

for ($m = 1; $m <= $qtdModelos; $m++) {
    $soma = 0;

    for ($t = 1; $t <= $qtdTestes; $t++) {
        $nota = readline("Nota Modelo:$m Teste:$t : ");
        
        if ($nota < 50) $class = "baixo";
        elseif ($nota < 80) $class = "moderado";
        else $class = "alto";
        
        echo "Desempenho: $class\n";
        $soma += $nota;
    }

    $media = $soma / $qtdTestes;
    echo "Média do modelo $m: $media\n";

    if ($media > $maiorMedia) {
        $maiorMedia = $media;
        $melhorModelo = $m;
    }
}

echo "Modelo com maior média: modelo $melhorModelo ($maiorMedia)\n";
?>

