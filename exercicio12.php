<?php
// Função para imprimir a palavra repetida várias vezes conforme o exemplo dado
function imprimirPalavra($palavra) {
    for ($i = 1; $i <= strlen($palavra); $i++) {
        $repeticoes = str_repeat($palavra, $i);
        echo strtoupper($repeticoes) . "\n";
    }
}

// Entrada de dados (pode ser feita pelo usuário)
$palavra = "sonho";

// Chamando a função para imprimir a palavra conforme o exemplo
imprimirPalavra($palavra);
?>