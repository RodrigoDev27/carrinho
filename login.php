<?php

include 'header.php';
include 'footer.php';






?>

<div class="container">
<div class="row">
   <div class="col-lg-4 offset-4 col-sm-8" style="border-style: solid; border-color: grey;border-width:1px;background-color:white;margin-top: 10px;border-radius: 10px;padding-bottom: 10px;margin-bottom:10px">
    <h1 align="center">Cadastro de Clientes</h1>
    <form  action='logar.php' method='POST'>
      <div class="mb-3">
        <label for="nome_cliente" class="form-label">email</label>
        <input type="text" name="email" class="form-control" id="nome_cliente" aria-describedby="nameHelp"required/>
        
      </div>
      <div class="mb-3">
        <label for="celular_cliente" class="form-label" >Senha</label>
        <input type="password" name="senha" class="form-control" id="celular_cliente" required/>
      </div>              
    
        <button type="submit"  class="btn btn-dark">Acessar</button>
      </form>
   </div>
</div>
</div>