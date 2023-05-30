<?php
include 'Carrinho.class.php';
include 'Produtos.class.php';
session_start();

if (isset($_SESSION['Carrinho'][$_POST['codigo']])) {
  $_SESSION['Carrinho'][$_POST['codigo']]->Qtdd = $_POST['quantidade'];
}

header("Location: listar.php");