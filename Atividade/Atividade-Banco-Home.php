<?php
session_start();
 
if(isset($_SESSION['Email']) && isset($_SESSION['Saldo'])) {
    // Formata o saldo no padrão brasileiro
    $saldoFormatado = number_format($_SESSION['Saldo'], 2, ',', '.');
 
    // Exibe o email e o saldo formatado
    echo "Bem Vindo, " . $_SESSION['Email'] . ", Seu Saldo é de: R$ " . $saldoFormatado;
} else {
    echo "Erro ao recuperar os dados. Faça o login novamente.";
}
?>