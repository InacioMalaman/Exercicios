<?php
// Função para imprimir números e seu produto até um número dado
function imprimirNumerosEProduto($numero) {
    $produto = 1;

    echo "Números de 1 até $numero e seus produtos:\n";
    for ($i = 1; $i <= $numero; $i++) {
        echo "$i ";
        $produto *= $i;
        echo "(Produto: $produto)\n";
    }
}

// Entrada de dados (pode ser feita pelo usuário)
$numero = 5;

// Chamando a função para imprimir números e seu produto
imprimirNumerosEProduto($numero);
?>