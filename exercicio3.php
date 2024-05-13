<?php
// Função para verificar se a pessoa é aceita ou não
function verificarAceitacao($nome, $sexo, $idade) {
    if ($sexo == 'feminino' && $idade < 25) {
        echo "$nome, ACEITA.";
    } else {
        echo "$nome, NÃO ACEITA.";
    }
}

// Entrada de dados
$nome = "Maria";
$sexo = "feminino";
$idade = 22;

// Chamando a função para verificar aceitação
verificarAceitacao($nome, $sexo, $idade);
?>