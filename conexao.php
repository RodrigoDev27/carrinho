<?php

session_start();

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "loja";

global $pdo;

try{

// orientada a objeto com pdo

$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = $pdo->query("SELECT * FROM Usuarios");
$sql->execute();

echo $sql->rowCount();




}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}













?>