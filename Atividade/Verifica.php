<?php
session_start();

// Inicializa as tentativas e o bloqueio se não existirem
if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 0;
}

if (!isset($_SESSION['bloqueio_tempo'])) {
    $_SESSION['bloqueio_tempo'] = 0;
}

// Verifica se o usuário já está bloqueado
if ($_SESSION['bloqueio_tempo'] > time()) {
    $tempo_restante = $_SESSION['bloqueio_tempo'] - time();
    echo "<script>
             alert('Você está bloqueado. Tente novamente em " . ceil($tempo_restante / 60) . " minutos.');
             window.location.href = 'index.php';
          </script>";
    exit();
}

$email = $_POST["Email"];
$senha = $_POST["Senha"];

$logins = array(
    ["email" => "maximo@gmail.com", "senha" => "123", "saldo" => "1500"],
    ["email" => "paulo@gmail.com", "senha" => "123", "saldo" => "500"],
    ["email" => "henrique@gmail.com", "senha" => "123", "saldo" => "5500"]
);

$loginValido = false;

foreach($logins as $login) {
    if($email == $login['email'] && $senha == $login['senha']) {
        $_SESSION['Email'] = $email;
        $_SESSION['Saldo'] = $login['saldo'];
        $_SESSION['Senha'] = $senha;
        $_SESSION['tentativas'] = 0; // Reinicia as tentativas após o login bem-sucedido

        echo "<script>
                 alert('Login Efetuado com SUCESSO!');
                 window.location.href = 'Atividade-Banco-Home.php';
              </script>";
        exit(); 
    }
}

// Incrementa a contagem de tentativas
$_SESSION['tentativas']++;

// Verifica se atingiu o limite de tentativas
if ($_SESSION['tentativas'] >= 3) {
    $_SESSION['bloqueio_tempo'] = time() + 10; // Bloqueia por 10 segundos
    echo "<script>
             alert('Você excedeu o número máximo de tentativas. O botão será desabilitado por 10 segundos.');
             document.getElementById('Confirmar').disabled = true; // Desabilita o botão
             setTimeout(function() {
                 document.getElementById('Confirmar').disabled = false; // Habilita após 10 segundos
             }, 10000);
             window.location.href = 'index.php';
          </script>";
    exit();
}

echo "<script>
         alert('Erro ao Efetuar Login! Você tem " . (3 - $_SESSION['tentativas']) . " tentativas restantes.');
         window.location.href = 'index.php';
      </script>";
?>
