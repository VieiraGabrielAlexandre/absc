<?php
    require_once('db_usuariosFisicos.php');
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$criacao = $_POST['dataatual'];
	$situacao = $_POST['situacao'];
	$classcliente = $_POST['classcliente'];

    $objDb = new dbconsultapessoafisica();
    $link = $objDb->conecta_mysql();

    $sql = "insert into usuarios(nome, email, senha,situacoes_id,niveis_acesso_id,created,modified) values
        ('$nome','$email','$senha','$situacao','$classcliente','$criacao','$criacao')";

    if (mysqli_query($link, $sql)){
        header('Location: cliente.php');
		
    } else{
        header('Location: efetuarcadastro.php');
    }
	?>