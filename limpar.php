<?php
    // Colocar Dentro de um metodo

    header("Location: listar.php");

    session_start();
 
    // Remove dados da sessão
    if(isset($_SESSION["Carrinho"])){
        unset($_SESSION["Carrinho"]);
    }
?>