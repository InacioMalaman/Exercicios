<?php
// Função para imprimir a tabuada de um número
function tabuada($numero) {
    echo "Tabuada do $numero:\n";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
}

// Entrada de dados (pode ser feita pelo usuário)
$numero = 7;

// Chamando a função para imprimir a tabuada
tabuada($numero);
?>