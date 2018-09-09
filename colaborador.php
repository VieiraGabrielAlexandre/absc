<?php
    session_start();
    echo "Razão Social: ". $_SESSION['usuarioEmail'];    
?>
<br>
<h1>Este sera uma Organização</h1>
<a href="sair.php">Sair</a>