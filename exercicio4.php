<?php
// Função para ordenar os números em ordem decrescente
function ordemDecrescente($num1, $num2, $num3) {
    $numeros = array($num1, $num2, $num3);
    rsort($numeros);
    return $numeros;
}

// Entrada de dados
$numero1 = 30;
$numero2 = 15;
$numero3 = 50;

// Chamando a função para ordenar os números
$numerosOrdenados = ordemDecrescente($numero1, $numero2, $numero3);

// Imprimindo os números em ordem decrescente
echo "Números em ordem decrescente: " . implode(", ", $numerosOrdenados);
?>