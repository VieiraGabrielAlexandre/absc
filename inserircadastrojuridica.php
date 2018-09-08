<?php
	session_start();
    require_once('db_usuariosFisicos.php');
	
	$cnpj = $_POST['cnpj'];
    $razao = $_POST['razao'];
    $nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$criacao = $_POST['dataatual'];
	$situacao = $_POST['situacao'];
	$classcliente = $_POST['classcliente'];

    $objDb = new dbconsultapessoafisica();
    $link = $objDb->conecta_mysql();
	
	
    $sql = "insert into instituicao (CNPJ,RAZAO,EMAIL,NOMECONTATO,SENHA,situacoe_id,niveis_acesso_id,created,modified) values
        ('$cnpj','$razao','$email','$nome','$senha','$situacao','$classcliente','$criacao','$criacao')";
	
	$resultado_usuario = mysqli_query($con2, $sql);
	$resultado = mysqli_fetch_assoc($resultado_usuario);
	
    if (mysqli_query($link, $sql)){
        $_SESSION['usuarioCNPJ'] = $resultado['cnpj'];
        $_SESSION['usuarioRAZAO'] = $resultado['razao'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
        $_SESSION['usuarioSituacao'] = $resultado['situacao'];
        $_SESSION['usuarioClasse'] = $resultado['classcliente'];
        $_SESSION['usuarioCriacao'] = $resultado['criacao'];
        header('Location: novousuario.php');
    } else{
        header('Location: inserircadastrojuridica.php');
    }
?>