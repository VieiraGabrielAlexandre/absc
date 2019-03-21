<?php
	session_start();
    require_once('db_usuarioJuridicos.php');
	
	$razao = $_POST['razao'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$cnpj = $_POST['cnpj'];
	$senha = $_POST['senha'];
	$criacao = $_POST['dataatual'];
	$cep = $_POST ['cep'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$pais = $_POST['pais'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$situacao = $_POST['situacao'];
	$classcliente = $_POST['classcliente'];

    $objDb = new dbconsultapessoajuridica();
    $link = $objDb->conecta_mysql();
	
    $sql = "insert into instituicao(CNPJ, RAZASOCIAL, EMAIL,SENHA, situacoe_id,niveis_acesso_id,created,modified,telefone,celular,cep,endereco,numero,complemento,bairro,pais,cidade,estado) values
  ('$cnpj','$razao','$email','$senha','$situacao','$classcliente','$criacao','$criacao','$telefone','$celular','$cep','$endereco','$numero','$complemento','$bairro','$pais','$cidade','$estado')";
	
	$resultado_usuario = mysqli_query($con2, $sql);
	$resultado = mysqli_fetch_assoc($resultado_usuario);
	
    if (mysqli_query($link, $sql)){
			$_SESSION['usuarioRazao'] = $resultado['razao'];
			$_SESSION['usuarioCNPJ'] = $resultado['cnpj'];
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