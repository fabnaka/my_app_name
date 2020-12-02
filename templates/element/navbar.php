<?php echo $this->Html->css('navbar'); 
 ?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./resources/css/header.css">
    <link rel="stylesheet" type="text/css" href="./resources/css/home.css">
    <link rel="stylesheet" type="text/css" href="./resources/css/footer.css">


<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #040618">
      <div class="container">

        <!--Logo-->
        <a class="navbar-brand col-md-3" href=<?= $this->Url->build(['controller'=>'Site','action'=>'index']) ?>>
          <span class="img-logo">PW store</span>
        </a>

        <!--Botão responsivo do menu-->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarToggler">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarToggler">
          <!--Barra de pesquisa-->
          <form class="form-inline my-2 my-lg-0 w-100 d-inline col-md-6" id="search">
            <div class="input-group">
              <input type="text" class="form-control border border-right-0" placeholder="Pesquisar">
                  <span class="input-group-append">
                      <button class="btn btn-outline-secondary border border-left-0" type="button">
                          <i class="fa fa-search"></i>
                      </button>
                  </span>
            </div>
              <!--<input class="form-control mr-sm-2 w-100 d-inline" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
              -->

          </form>

          <!--Menus-->

          <!--<div class="collapse navbar-collapse col-md-4" id="navbarSupportedContent">-->
            <ul class="navbar-nav ml-auto"><!--Menus-->      
              
              <li class="nav-item active">
                <a class="nav-link" href="#"> 
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg> Perfil
                <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="#">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>
                  Carrinho
                </a>

              </li>


              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tags" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                    <path fill-rule="evenodd" d="M5.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                    <path d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                  </svg>
                  Categoria
                <a/>
                
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="category.html">Celulares</a>
                  <a class="dropdown-item" href="#">Computadores</a>
                  <a class="dropdown-item" href="#">Televisores</a>
                  <a class="dropdown-item" href="#">Diversos</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Todos os produtos</a>
                </div>  
              </li>

            </ul>
          <!--   </div> -->  <!--Menus-->
        </div>      
      </div>
    </nav>

