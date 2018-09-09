<?php
	session_start();
    require_once('db_usuarioJuridicos.php');
	
	$cnpj = $_POST['cnpj'];
    $razao = $_POST['razao'];
    $nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$criacao = $_POST['dataatual'];
	$situacao = $_POST['situacao'];
	$classcliente = $_POST['classcliente'];

    $objDb = new dbconsultapessoajuridica();
    $link = $objDb->conecta_mysql();
	
	
    $sql = "insert into instituicao (CNPJ,RAZASOCIAL,EMAIL,NOMECONTATO,SENHA,situacoe_id,niveis_acesso_id,created,modified) values
        ('$cnpj','$razao','$email','$nome','$senha','$situacao','$classcliente','$criacao','$criacao')";
    
	$insercao = mysqli_query($con2, $sql);
	$resultado = mysqli_fetch_assoc($insercao);
	
    if (mysqli_query($link, $sql)){
        $_SESSION['usuarioCNPJ'] = $resultado['cnpj'];
        $_SESSION['usuarioRAZAO'] = $resultado['razao'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        $_SESSION['usuarioSenha'] = $resultado['senha'];
        $_SESSION['usuarioNiveisAcessoId'] = $resultado['classcliente'];
        $_SESSION['usuarioSituacao'] = $resultado['situacao'];
        $_SESSION['usuarioClasse'] = $resultado['classcliente'];
        $_SESSION['usuarioCriacao'] = $resultado['criacao'];
        
        header('Location: novousuario.php'); 
    } else{
        header('Location: cadastrarinstituicao.php');
    }
?>