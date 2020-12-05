<?php 
echo $this->Html->css('categoria'); 
 ?>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>
    <div id="product-display">
        <div class="container grid grid-template-columns-3">
            <?php foreach($produtos as $produto): ?>
                <div class="card" id="card">
                    <div class="card-body">
                        <a href=<?= $this->Url->build(['controller'=>'Site','action'=>'descricao', $produto->id]) ?> ><?= @$this->Html->image($produto->image) ?></a>
                        <h5 id="card-text"> <?=$produto->nome_produto?> </h5>
                        <h5 id="card-text"> R$  <?=$produto->preco_produto?> </h5>
                        <a id="button" href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Adicionar ao carrinho</a>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
</body>

    