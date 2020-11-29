<?php echo $this->Html->css('site'); 
 ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./resources/css/header.css">
    <link rel="stylesheet" type="text/css" href="./resources/css/home.css">
    <link rel="stylesheet" type="text/css" href="./resources/css/footer.css">

    <title>Sua loja de importados</title>
    <link rel="icon" href="resources/img/favicon.png">
  </head>
  
  <body>

    <div id="product-display">
      <div class="gambi container"></div>
      
      <div id="showcase" class="container">
        <h1>PWstore</h1>
        <h3>-os melhores eletrônicos para o seu dia-a-dia</h3>
        <h3>-variedades e lançamentos com preços amigáveis</h3>
        <h3>-compra fácil e segura</h3>
        <br><br>
        <h4>destaque:</h4>
      </div>

      <div class="grid container" >
      
        <item-card class="grid-item" href="description.html" title="iphone xr black" image="./_assets/iphone-xr-black.png" price="R$3,799.90"> 
        </item-card>

        <item-card class="grid-item" title="Macbook Air 13" image="./_assets/macbook.png" price="R$9,299.90"> 
        </item-card>

        <item-card class="grid-item" title="Beats Studio 3" image="./_assets/beats-headphones.png" price="R$1,479.90"> 
        </item-card>

        <item-card class="grid-item" title='Smart TV 4K 55"' image="./_assets/smart-tv.png" price="R$2,379.90"> 
        </item-card>
      </div> 

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script type="text/javascript" src="./components/itemCard.js"></script>
  </body>

</html>