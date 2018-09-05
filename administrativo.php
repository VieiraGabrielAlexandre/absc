<?php
    session_start();
    echo "Usuario: ". $_SESSION['usuarioNome'];    
?>
<br>
<?php
	echo "Email: ". $_SESSION['usuarioEmail'];
?>
<h1>Este usuario é administrador total</h1>

<br>
<a href="sair.php">Sair</a>