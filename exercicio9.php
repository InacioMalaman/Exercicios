<?php
// Função para imprimir a palavra "SOL" um número específico de vezes
function imprimirPalavraSol($numVezes) {
    for ($i = 0; $i < $numVezes; $i++) {
        echo "SOL ";
    }
}

// Entrada de dados (pode ser feita pelo usuário)
$numVezes = 5;

// Chamando a função para imprimir a palavra "SOL"
imprimirPalavraSol($numVezes);
?>