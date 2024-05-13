<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Função para realizar a adição com as condições especificadas
function adicaoComCondicao($num1, $num2) {
    $soma = $num1 + $num2;

    if ($soma > 20) {
        $resultado = $soma + 8;
    } else {
        $resultado = $soma - 5;
    }

    return $resultado;
}

// Números de exemplo
$numero1 = 10;
$numero2 = 15;

// Chamando a função e exibindo o resultado
$resultado = adicaoComCondicao($numero1, $numero2);
echo "O resultado da adição com condição é: " . $resultado;
?>
</body>
</html>