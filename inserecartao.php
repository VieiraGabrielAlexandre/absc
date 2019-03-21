<?php
	session_start();
    require_once('db_usuarioFisicos.php');
	
	$nome = $_POST['nome'];
	$numerocartao = $_POST['numerocartao'];
	$vencimento = $_POST['vencimento'];
	$cvv = $_POST['cvv'];
	$cpf = $_POST['cpf'];
	
    $objDb = new dbconsultapessoafisica();
    $link = $objDb->conecta_mysql();
	
    $sql = "insert into cartoes(NomeCartao,NumeroCartao,Vencimento,CVV,CPF) values
  ('$nome','$numerocartao','$vencimento','$cvv','$cpf')";
	
	$resultado_usuario = mysqli_query($con2, $sql);
	$resultado = mysqli_fetch_assoc($resultado_usuario);
	
    if (mysqli_query($link, $sql)){
			$_SESSION['usuarionomecartao'] = $resultado['nome'];
			$_SESSION['vencimentocartao'] = $resultado['vencimento'];
			$_SESSION['usuariocpf'] = $resultado['cpf'];
        header('Location: cartaocadastrado.php');
    } else{
        header('Location: paginadecartao.php');
    }
?>