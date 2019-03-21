<?php

@session_start(); // Inicializa a sessão

if (! isset($_SESSION["email"],$_SESSION["senha"])) // aqui péga o valor do nome do campo da pagina de login
echo "<script>window.location='login.php'</script>"; //caso não esteja correto ela envia para a pagina determianda

?>