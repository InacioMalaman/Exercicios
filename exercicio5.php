<?php
// Função para classificar o triângulo
function classificarTriangulo($lado1, $lado2, $lado3) {
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "Triângulo Equilátero: todos os lados são iguais.";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "Triângulo Isósceles: possui dois lados iguais.";
    } else {
        echo "Triângulo Escaleno: todos os lados são diferentes.";
    }
}

// Entrada de dados (pode ser feita pelo usuário)
$lado1 = 5;
$lado2 = 5;
$lado3 = 5;

// Chamando a função para classificar o triângulo
classificarTriangulo($lado1, $lado2, $lado3);
?>