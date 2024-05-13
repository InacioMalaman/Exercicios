<?php
// Função para gerar o recibo de empréstimo
function gerarRecibo($livro, $tipoUsuario) {
    $prazoDevolucao = ($tipoUsuario == 'professor') ? 10 : 3;
    $dataAtual = date('d/m/Y');
    $dataDevolucao = date('d/m/Y', strtotime("+$prazoDevolucao days"));

    echo "Recibo de Empréstimo\n";
    echo "=====================\n";
    echo "Livro: $livro\n";
    echo "Tipo de Usuário: $tipoUsuario\n";
    echo "Data de Empréstimo: $dataAtual\n";
    echo "Data de Devolução: $dataDevolucao\n";
    echo "=====================\n";
}

// Entrada de dados (pode ser feita pelo usuário)
$livro = "Dom Casmurro";
$tipoUsuario = "aluno";

// Chamando a função para gerar o recibo
gerarRecibo($livro, $tipoUsuario);
?>