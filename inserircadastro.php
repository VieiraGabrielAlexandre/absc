<?php
	session_start();
    require_once('db_usuariosFisicos.php');
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$cpf = $_POST['cpf'];
	$datanascimento = $_POST['datanascimento'];
	$senha = $_POST['senha'];
	$criacao = $_POST['dataatual'];
	$sexo = $_POST['sexo'];
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

    $objDb = new dbconsultapessoafisica();
    $link = $objDb->conecta_mysql();
	
	
    $sql = "insert into usuarios(nome, cpf, email, senha,situacoe_id,niveis_acesso_id,created,modified,telefone,celular,datanascimento,sexo,cep,endereco,numero,complemento,bairro,pais,cidade,estado) values
        ('$nome','$cpf','$email','$senha','$situacao','$classcliente','$criacao','$criacao','$telefone','$celular','$datanascimento','$sexo','$cep','$endereco','$numero','$complemento','$bairro','$pais','$cidade','$estado')";
	
	$resultado_usuario = mysqli_query($con2, $sql);
	$resultado = mysqli_fetch_assoc($resultado_usuario);
	$linha = mysqli_num_rows($resultado);
	if ($linha == 0){
		echo "Usuario disponivel.";	
	} else {
		echo "Usuario já cadastrado";
	}
	
    if (mysqli_query($link, $sql)){
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioCpf'] = $resultado['cpf'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			$_SESSION['usuarioSenha'] = $resultado['senha'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['classcliente'];
			$_SESSION['usuarioSituacao'] = $resultado['situacao'];
			$_SESSION['usuarioClasse'] = $resultado['classcliente'];
			$_SESSION['usuarioCriacao'] = $resultado['criacao'];
        header('Location: novousuario.php');
    } else{
        header('Location: efetuarcadastro.php');
    }
?>