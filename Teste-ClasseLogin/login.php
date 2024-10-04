<?php
session_start(); // Certifique-se de iniciar a sessão

require_once('conexao.php');

class Login {
    protected $Mysql;

    public function __construct() {
        $this->conexao();
    }

    private function conexao() {
        global $servername, $username, $password, $dbname;
        $this->Mysql = new mysqli($servername, $username, $password, $dbname);
    
        if ($this->Mysql->connect_error) {
            die("Conexão falhou: " . $this->Mysql->connect_error);
        }
    
        var_dump($this->Mysql);
    }
    
    public function Login() {
        if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
            $email = $this->Mysql->real_escape_string($_POST['email']);
            $senha = $this->Mysql->real_escape_string($_POST['senha']);
    
            $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            var_dump($sql);
    
            $result = $this->Mysql->query($sql);
            var_dump($result);
    
            if ($result && mysqli_num_rows($result) < 1) {
                var_dump(mysqli_num_rows($result));
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header("Location: Teste-Login.php");
                exit();
            } else {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                var_dump($_SESSION);
                header("Location: Teste-Login_acessado.php");
                exit();
            }
        } else {
            header("Location: FormLogin.php");
            exit();
        }
    
        return isset($result) ? $result->fetch_array(MYSQLI_ASSOC) : null;
    }
    
}
?>