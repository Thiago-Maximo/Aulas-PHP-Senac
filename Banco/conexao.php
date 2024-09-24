<?php
    $servername = "localhost";
    $username = "root";
    $password="";
    $dbname = "banco";

    //Iniciando uma conexão mysql
    $Mysql = new mysqli($servername,$username,$password,$dbname);

    //Chegando conexão
    if($Mysql -> connect_error){
        die("Connection failed:".$Mysql->connect_error);
    }
    echo"Conectado com Sucesso!!!";
?>