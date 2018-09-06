<?php
    session_start();
    echo "Usuario: ". $_SESSION['usuarioNome'];    
?>
<h1>Este usuario é administrador total</h1>
<br>
<a href="sair.php">Sair</a>