<?php
    include 'Carrinho.Class.php';
    include 'Produtos.Class.php';
    session_start();

    echo '<pre>';
    print_r([$_GET['codigo']]);
    echo '</pre>';

    
    if (isset($_SESSION['Carrinho'][$_GET['codigo']])) {
        $_SESSION['Carrinho'][$_GET['codigo']]->Qtdd++;
    } else {
    $produto = new Carrinho;

    $produto -> img = $_SESSION['Produtos'][$_GET['codigo']] -> imagem;
    $produto -> Nome = $_SESSION['Produtos'][$_GET['codigo']] -> Nome;
    $produto -> Valor = $_SESSION['Produtos'][$_GET['codigo']] -> Valor;
    $produto -> Qtdd = 1 ;
    

    $_SESSION['Carrinho'][] = $produto;
}
 

    header('location: itens.php');
    
    ?>