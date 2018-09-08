<?php
	session_start();
    echo "Usuario: ". $_SESSION['usuarioNome'];
?>
<br>
<?php
	echo "Email: ". $_SESSION['usuarioEmail'];
?>
<br>
<h1>Este usuario sera um cliente</h1>
<a href="sair.php">Sair</a>