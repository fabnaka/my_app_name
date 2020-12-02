<?php 

echo $this->Html->css('descricao'); 
 ?>


<div class="container">

      <div class="row">

        <div class="col-md-6" id="image-descricao">
             
            <?php
                echo $this->Html->image($produto->image);
            ?>
            
        </div>

        <div class="col-md-6" >
          <div class="valor" style="margin-top: 60px">

              <h2 style="font-size: 34px;">
                  <?= $produto->nome_produto ?>
              </h2>

              <h3>
                R$ <?= $produto->preco_produto ?>,00
              </h3>
              
          </div>

          
          
          <div class="resumo-produto" style="text-align: justify; margin-top: 30px">
              Vidro frontal mais resistente e molduras em alumínio aeroespacial
              Nova tela do iPhone XRde 6.1” é a mais avançada LCD da indústria
              Com conectividade 4G e Wi-Fi
              Câmera traseira de 12MP e frontal de 7MP




          </div>          
          
          <div class="botao" style="margin-top: 30px">
              <button type="button" class="btn btn-dark btn-lg">
                  Adicionar ao carrinho
              </button>
          </div>

        </div>
        
      </div>


      <div class="descricao" style="margin-top: 50px">
          <h2 style="opacity: 0.70;">Descrição do Produto</h2>

          <div style="margin-top: 20px">
            <p style="text-align: justify;">
            <?= $produto->descricao_produto ?>
            </p>
 
          </div>
          
      </div>


    </div>