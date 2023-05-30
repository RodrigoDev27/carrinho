<?php
    include 'Produtos.Class.php';
    include 'header.php';
    session_start();

    

    

    echo '
        <div class="principal">
    ';
    foreach ($_SESSION['Produtos'] as $key => $value) {
        


        echo '
        <div class="card" style="width: 15rem;display:inline-block; ">
            <img src="'.$value->imagem.'" class="card-img-top" alt="...">
            <div class="card-body" style="text-align:center;">
                <h5 class="card-title">'.$value->Nome.'</h5>
            
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="text-align:center;">R$ '.$value->Valor.'.00</li>
            </ul>
            
            
           
            <div class="card-body">
                <a type="sumbit" name="adicionar" href="inserir.php?codigo='.$key.'" class="btn btn-dark">Adicionar ao carrinho</a>

            </div>
            </div>
        ';
    }

   
    echo '</div>';
    include 'footer.php';
    //header("location:inserir.php?nome='qtdd'");

?>

<script>

  </script>

