<?php
  $tentativas = 0;
  $logado = false;
   $email = $_POST["Email"];
   $senha = $_POST["Senha"];
   $logins = array(  
    ["email" => "maximo@gmail.com", "senha" => "123","saldo"=>"1500"],
    ["email" => "usuario2@gmail.com", "senha" => "senha2","saldo"=>"500"],
    ["email" => "usuario3@gmail.com", "senha" => "senha3","saldo"=>"5500"]
    );

    while($tentativas < 3){
      foreach($logins as $login){
        if($email == $login["email"] and $senha == $login["senha"]){
          echo "<script>
          alert('Login Efetuado com SUCESSO!');
          window.location.href = 'Atividade-Banco-Home.php'; 
        </script>";
        $logado = true;
        $tentativas = 3;
        }
        else{
          echo "<script>
          alert('Erro ao Efetuar Login!');
          window.location.href = 'index.php'; 
        </script>";
        sc_btn_display("Confirmar", off);
        }
        $logado = false;
        $tentativas++;
      }
    }
?>