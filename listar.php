<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-light navbar-dark bg-dark" style="margin-bottom: 50px">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="itens.php">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="listar.php">Carrinho</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<script>
    function inserirLinkEditar(codigo) {
      document.getElementById('btn-editar-registro').href = 'editar.php?codigo=' + codigo;
    }
  </script>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-3">
<?php
    include 'Carrinho.Class.php';
    include 'footer.php';
    session_start();

   
      

    
    if (isset($_SESSION['Carrinho'])) {

      echo '
          
          <table class="table">
              <thead>
                  <tr >
                  
                      <td scope="col">Produto</td>
                      <td scope="col">Preço</td>
                      <td scope="col">Quantidade</td>
                      <td scope="col">SubTotal</td>
                      <td scope="col">Remover</td>
                     
                  </tr>
              </thead>
              <tbody>
              
          ';
          $v = 0;
          
          foreach ($_SESSION['Carrinho'] as $chave => $p) {
    
          echo'
          
              <tr>
                  <td>'.$p->Nome.'</td>
                  <td>R$ '.$p->Valor.'.00</td>                 
                  <td>
                  
                    <form method="POST" action="editar.php">
                      <input type="hidden" name="codigo" value="' . $chave . '" />
                      <button type="submit" onclick="decrementarQuantidadeProduto(\'produto-' . $chave . '\')" id="menos" value="-" />-</button>
                      <input type="text" style="width:30px;text-align:center" name="quantidade" value="' . $p->Qtdd . '" id="produto-' . $chave . '" size="2" />
                      <button type="submit" onclick="incrementarQuantidadeProduto(\'produto-' . $chave . '\')" id="mais" value="+" />+</button>
                      
                    </form>
                  </td>
                  <td>R$ '.$p->Total = intval($p->Valor * $p->Qtdd).'.00 </td>        
                  <td>
                      <a href="excluir.php?codigo='.$chave.'" class="btn btn-warning">Excluir</a><br>
                     
                  </td>
                 
                  </div>
                  <div class="modal-footer">
                   
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
            
            
            
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
              </body>
            </html>
                
               
          ';  
          $v = $v + ($p->Valor * $p->Qtdd);
          }      

          echo'
              </tbody>
              </table><br><br> ';

          
            
          echo' 
            <div>
            <h1>Total: R$ '.$v.'.00</h1><br><br>
              <a href="limpar.php" class="btn btn-primary">Limpa Carrinho</a>
             </div>
           
 
            
          ';
          
          
      }
    
        if (isset($_SESSION['Carrinho']) == false) {
          echo '
            <h1>Carrinho vazio</h1>
                  
          ';        
        }

        
?>



  <script type="text/javascript">
    function incrementarQuantidadeProduto(idProduto) {
      document.getElementById(idProduto).value = parseInt(document.getElementById(idProduto).value) + 1;
    }

    function decrementarQuantidadeProduto(idProduto) {
      var quantidade = parseInt(document.getElementById(idProduto).value);

      if (quantidade > 1) {
        document.getElementById(idProduto).value = quantidade - 1;
      }
    }
  </script>
  <?php
  include 'footer.php';
  ?>