<?php 

echo $this->Html->css('site'); 
 ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
    <title>Sua loja de importados</title>
    <link rel="icon" href="resources/img/favicon.png">
  </head>
  
  <body>

    <div id="product-display">
      
      <div class="container">
        <h1>PWstore</h1>
        <h3>-os melhores eletrônicos para o seu dia-a-dia</h3>
        <h3>-variedades e lançamentos com preços amigáveis</h3>
        <h3>-compra fácil e segura</h3>
        <br><br>
        <h4>destaque:</h4>
      </div>

      <div class="container grid grid-template-columns-3" >

        <?php foreach($produtos as $produto): ?>
          <div class="card" id="card">
            <div class="card-body">
              <a href=<?= $this->Url->build(['controller'=>'Site','action'=>'descricao', $produto->id]) ?> ><?= @$this->Html->image($produto->image) ?></a>
              <h5 id="card-text"> <?=$produto->nome_produto?> </h5>
              <h5 id="card-text"> R$  <?=$produto->preco_produto?> </h5>
              <a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Adicionar ao carrinho</a>
            </div>
          </div>
        <?php endforeach?>
      </div> 

    </div>
  </body>

</html>

