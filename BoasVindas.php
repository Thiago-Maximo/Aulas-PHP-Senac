<html>
<body>
    <form action="Calcular.php" method="POST">
        Produto <input type="text" name="produto">
        Valor <input type="text" name="valor">
        <input type="submit" value="Calcular">
    </form>
    <pre>
        <?php
            session_start();
            if(isset($_SESSION['produtos'])){
                echo $_SESSION['produtos'];
            }
            echo"<br>";
            if(isset($_SESSION['produtos'])){
                echo $_SESSION['total'];
            }
        ?>
    </pre>
</body>
</html>