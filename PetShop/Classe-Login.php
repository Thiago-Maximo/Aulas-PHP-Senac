<?php
include("conexao.php");
 
class Autenticacao {
    private $conexao;
 
    public function __construct($conexao) {
        $this->conexao = $conexao;
    }
 
    public function login($email, $senha) {
        session_start();
        // Usando prepared statements para evitar SQL Injection
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
 
        if ($resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();
 
            // Salvando os dados do usuário na sessão
            $_SESSION["email"] = $usuario['email'];
            $_SESSION["senha"] = $usuario['senha'];
 
            // Redirecionar para a página desejada
            header("Location: ver_agendamentos-cliente.php "); // Substitua "nova_pagina.php" pelo nome correto do arquivo
            exit();
        } else {
            // Exibir alerta e redirecionar para a página de login
            echo "<script> alert('Email ou Senha Inválidos'); window.location.href = 'FormLogin.php'; </script>";
        }
    }
 
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: FormLogin.php");
        exit();
    }
}
?>
 
<?php
// Código para lidar com o envio do formulário
include("conexao.php");
 
// Criar uma instância da classe Autenticacao
$autenticacao = new Autenticacao($Mysql);
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];
 
    // Chamar o método de login
    $autenticacao->login($email, $senha);
}
?>