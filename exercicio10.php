<?php
// Função para calcular a soma dos números positivos e contar os negativos
function calcularSomaPositivosEContarNegativos($numeros) {
    $somaPositivos = 0;
    $totalNegativos = 0;

    foreach ($numeros as $numero) {
        if ($numero > 0) {
            $somaPositivos += $numero;
        } elseif ($numero < 0) {
            $totalNegativos++;
        }
    }

    echo "Soma dos números positivos: $somaPositivos\n";
    echo "Total de números negativos: $totalNegativos\n";
}

// Entrada de dados (pode ser feita pelo usuário)
$numeros = array(5, -10, 15, -20, 25, -30, 35, -40, 45, -50, 55, -60, 65, -70, 75, -80, 85, -90, 95, -100);

// Chamando a função para calcular a soma dos positivos e contar os negativos
calcularSomaPositivosEContarNegativos($numeros);
?>