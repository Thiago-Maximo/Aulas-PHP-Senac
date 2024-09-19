<?php
   $email = "maximo@gmail.com";
   $senha = "123";

   if($_POST["email"] == $email and $_POST["senha"] == $senha){
    echo "<script>
    alert('Login Efetuado com SUCESSO!');
    window.location.href = 'BoasVindas.php'; 
  </script>";
   }
   else{
    echo "<script>
    alert('Erro ao Efetuar Login!');
    window.location.href = 'Form.php'; 
  </script>";
   }
?>