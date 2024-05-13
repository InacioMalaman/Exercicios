<?php
// Função para verificar divisibilidade
function verificarDivisibilidade($numero) {
    if ($numero % 10 == 0) {
        echo "$numero é divisível por 10.";
    } elseif ($numero % 5 == 0) {
        echo "$numero é divisível por 5, mas não por 10.";
    } elseif ($numero % 2 == 0) {
        echo "$numero é divisível por 2, mas não por 5 nem por 10.";
    } else {
        echo "$numero não é divisível por 10, 5 nem por 2.";
    }
}

// Número de exemplo
$numero = 30;

// Chamando a função para verificar divisibilidade
verificarDivisibilidade($numero);
?>