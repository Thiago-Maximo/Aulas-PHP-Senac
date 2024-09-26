<html>
<body>
<?php
    include("conexao.php");
    
    if(!empty($_POST['id'])){
        $sql = "DELETE FROM contas WHERE id=".$_POST['id'];
        $Mysql->query($sql);
    }

    if(isset($_POST) && !empty($_POST)){
        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $saldo = $_POST["saldo"];

        $query = "UPDATE contas SET nome='$nome',usuario='$usuario',senha='$senha',saldo='$saldo' WHERE id=".$_POST["id"];
        $resultado = query($Mysql,$query);
    }elseif(isset($GET["id"] && !empty($_GET["id"]))){
            $sql= "SELECT * FROM contas WHERE id=".$_POST["id"];
            
            $resultado = query($Mysql,$query);

            $dados= mysqli_fetch_array($resultado);

            $_POST['nome'] = $row['nome'];
            $_POST['usuario'] = $row['usuario'];
            $_POST['senha'] = $row['senha'];
            $_POST['saldo'] = $row['saldo'];
    }

    if(isset($_POST["id"] && !empty($_POST["id"]))){
        if($_POST['nome'] == "" and $_POST['usuario']=="" and $_POST['senha']=="" and $_POST['saldo']==""){
            $sql= "SELECT * FROM contas WHERE id=".$_POST["id"];
            
            $_POST['nome'] = $row['nome'];
            $_POST['usuario'] = $row['usuario'];
            $_POST['senha'] = $row['senha'];
            $_POST['saldo'] = $row['saldo'];
        }else{
            echo"Deu erro ai PAE!!!";
        }
        //$sql = "UPDATE contas SET nome='$nome',usuario='$usuario',senha='$senha',saldo='$saldo' WHERE id=".$_POST['id'];
        //$Mysql->query($sql);
    }
 
    if (!empty($_POST['nome'])){
        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $saldo = $_POST["saldo"];
 
        $sql = "INSERT INTO contas (nome, usuario, senha, saldo)
            VALUES ('$nome', '$usuario', '$senha', '$saldo')";
        $Mysql->query($sql);
    }
 
    $sql = "SELECT id,nome,usuario,saldo FROM contas";
    $dados = $Mysql->query($sql);
 
    echo "<table><tr><th>ID</th><th>Nome</th><th>usuario</th><th>saldo</th></tr>";
    while($row = $dados->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["usuario"].
        "</td><td>".$row["saldo"]."</td><td>
        <form action='index.php' method='POST'>
            <input type ='hidden' name='id' value='".$row["id"]."'>
            <input type ='submit' value='Deletar'>
        </form>
        <td>
        <form action='index.php' method='POST' id='atualiza'>
            <input type ='hidden' name='id' value='".$row["id"]."'>
            <input type ='submit' value='Atualizar' name='Atualizar'>
        </form>
        </td></tr>";
    }
?>
 
<form action="index.php" method="POST" name="Formulario" value= <?php echo $id?>><br>
    Nome: <input type="text" name="nome"><br>
    Usuário: <input type="text" name="usuario"><br>
    Senha: <input type="text" name="senha"><br>
    Saldo: <input type="text" name="saldo"><br>
    <input type="submit" value="Inserir">
</form>
 
</body>
</html>