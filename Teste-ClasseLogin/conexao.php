<?php
    $servername = "localhost";
    $username = "root";
    $password="";
    $dbname = "petshop2";

    //Iniciando uma conexão mysql
    $Mysql = new Mysqli($servername,$username,$password,$dbname);

    //Chegando conexão
    if($Mysql -> connect_error){
        die("Connection failed:".$Mysql->connect_error);
    }
    echo"";
?>