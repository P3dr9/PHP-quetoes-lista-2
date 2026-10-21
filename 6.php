<?php

$senha = readline("Digite a senha: ");


while ($senha != 1234) {
    echo "Acesso Negado.\n";
    $senha = readline("Digite novamente: ");
}

echo "Acesso permitido. Desenvolva o programa em PHP\n";

?>
