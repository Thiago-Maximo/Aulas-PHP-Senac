<Html>
    <link rel="stylesheet" href="Form.css">
<body>
    <a href="Exibir-Usuarios.php">Ir Para a Lista de Usuarios</a>

  <form class="form" action="Inserir-Form.php" method="POST">
       <p class="form-title">Cadastrar Usuario No Banco de Dados atravé de Formulario</p>
        <div class="input-container">
          <input type="text" placeholder="Usuario" name="Usuario" required>
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="text" placeholder="Nome" name="Nome" required>
        </div>
        <div class="input-container">
          <input type="text" placeholder="Senha" name="Senha" required>
        </div>
        <div class="input-container">
          <input type="text" placeholder="Saldo" name="Saldo" required>
        </div>
         <button type="submit" class="submit" name="Confirmar">
          Acessar        
        </button>
      <p class="signup-link">
        No account?
        <a href="">Sign up</a>
      </p>
   </form>

</body>
</Html>

<?php
    /*include("conexao.php");

    
    $sql = "SELECT id,nome,usuario,saldo FROM contas";
    $dados = $Mysql->query($sql);

    echo"<table><tr><th>ID</th><th>Nome</th><th>Usuario</th><th>saldo</th></tr>";
    while($row = $dados-> fetch_assoc()){
        echo"<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["usuario"]."</td><td>".$row["saldo"]."</td></tr>";
    }*/
?>