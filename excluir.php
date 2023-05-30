<?php
    include 'Carrinho.class.php';
    session_start();  
    unset($_SESSION['Carrinho'][$_GET['codigo']]);
    header("Location: listar.php");
?>
