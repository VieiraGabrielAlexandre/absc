<?php
    //$servidor = "127.0.0.1";
    //$usuario = "root";
    //$senha = "";
    //$dbname = "usuarios";

    $servidor = "127.0.0.1:55504";
    $usuario = "azure";
    $senha = "6#vWHD_$";
    $dbname = "usuarios";
    
    //Criar a conexao
    //Database=localdb;Data Source=127.0.0.1;User Id=azure;Password=6#vWHD_$;Port=53870
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }      
?>