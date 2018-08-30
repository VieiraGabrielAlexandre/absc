<?php
    session_start();
    echo "Usuario: ". $_SESSION['usuarioNome'];    
?>
<br>
<h1>Este usuario sera uma ONG</h1>
<a href="sair.php">Sair</a>