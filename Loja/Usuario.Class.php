<?php
class Usuario {

    public function login($email, $senha) {
        global $pdo;

        // Inicia a sessão
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Consulta no Banco de Dados
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);

        // Bind de parâmetros para prevenir injeção SQL
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);

        // Executa a consulta
        $sql->execute();

        // Verifica se a consulta retornou algum resultado
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();

            // Inicia sessão com o ID do usuário e tipo de usuário
            $_SESSION['id'] = $dado['id'];
            $_SESSION['tipo_usuario'] = $dado['tipo_usuario'];

            // Verifica o tipo de usuário e redireciona para a página correta
            if ($dado['tipo_usuario'] == 'cliente') {
                header("Location: cliente.php"); // Redireciona clientes para cliente.php
                exit; //o script sera interrompido após o redirecionamento
            } elseif ($dado['tipo_usuario'] == 'funcionario') {
                header("Location: index.php"); // Redireciona funcionários para funcionario.php
                exit; //o script sera interrompido após o redirecionamento
            }
        } else {
            echo "Usuário ou senha inválidos!";
            return false;
        }
    }
}
?>