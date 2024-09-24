<Html>
    <link rel="stylesheet" href="Form.css">
<body>
    
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