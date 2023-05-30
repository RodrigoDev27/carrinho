<?php
    include 'Produtos.Class.php';
    session_start();

    $Produto1 = new Produto;
    $Produto2 = new Produto;
    $Produto3 = new Produto;
    $Produto4 = new Produto;
    $Produto5 = new Produto;
    $Produto6 = new Produto;

    $Produto1->imagem = "img/battle.png";
    $Produto1->Nome = "Battlefield 1";
    $Produto1->Valor = intval("100");

    $_SESSION['Produtos'][] = $Produto1;

    $Produto2->imagem = "img/Call of duty.png";
    $Produto2->Nome = "Call of duty";
    $Produto2->Valor = intval("150");


    $_SESSION['Produtos'][] = $Produto2;

    $Produto3->imagem = "img/Crash.png";
    $Produto3->Nome = "Crash";
    $Produto3->Valor = intval("75");

    $_SESSION['Produtos'][] = $Produto3;

    $Produto4->imagem = "img/Gta.png";
    $Produto4->Nome = "Gta V";
    $Produto4->Valor = intval("150");
    

    $_SESSION['Produtos'][] = $Produto4;

    $Produto5->imagem = "img/item5.png";
    $Produto5->Nome = "FIFA 21";
    $Produto5->Valor = intval("100");
    

    $_SESSION['Produtos'][] = $Produto5;

    $Produto6->imagem = "img/item6.png";
    $Produto6->Nome = "GRAN Turismo ";
    
    $Produto6->Valor = intval("120");
    

    $_SESSION['Produtos'][] = $Produto6;
    header("Location: itens.php")
    ?>


