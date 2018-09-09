<?php
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $dbname = "usuarios";
    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }      
?>