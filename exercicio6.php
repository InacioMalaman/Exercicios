<?php
// Função para retornar o nome do mês com base no número
function nomeDoMes($numero) {
    switch ($numero) {
        case 1:
            return "Janeiro";
        case 2:
            return "Fevereiro";
        case 3:
            return "Março";
        case 4:
            return "Abril";
        case 5:
            return "Maio";
        case 6:
            return "Junho";
        case 7:
            return "Julho";
        case 8:
            return "Agosto";
        case 9:
            return "Setembro";
        case 10:
            return "Outubro";
        case 11:
            return "Novembro";
        case 12:
            return "Dezembro";
        default:
            return "Não existe mês com este número.";
    }
}

// Entrada de dados (pode ser feita pelo usuário)
$numero = 5;

// Chamando a função para obter o nome do mês
$nomeMes = nomeDoMes($numero);

// Exibindo o resultado
echo $nomeMes;
?>