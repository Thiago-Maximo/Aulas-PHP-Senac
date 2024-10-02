<?php
    $servername = "localhost";
    $username = "root";
    $password="";
    $dbname = "petshop";

    //Iniciando uma conexão mysql
    $Mysql = new PDO($servername,$username,$password,$dbname);

    //Chegando conexão
    if($Mysql -> connect_error){
        die("Connection failed:".$Mysql->connect_error);
    }
    echo"";
?>