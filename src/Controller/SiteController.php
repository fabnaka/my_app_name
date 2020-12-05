<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;

class SiteController extends AppController{

    public function beforeFilter(EventInterface $event)
    {
        parent :: beforeFilter($event);
        $this->Auth->allow();
        

        $this ->loadModel('CategoriasProdutos');
        $categorias = $this->CategoriasProdutos->find('all');
        $this ->set('categorias',$categorias);

    }

    public function index(){
        $this->viewBuilder() -> setLayout('site');

        $this ->loadModel('Produtos');
        
        
        $produtos = $this->Produtos->find('all')->limit(4);
        

        $this ->set('produtos',$produtos);
        


    }

    public function descricao($id){

        $this->viewBuilder() -> setLayout('site');

        $this ->loadModel('Produtos');
        $produto = $this ->Produtos->get($id);
        $this ->set('produto',$produto);
    }

    
    public function categoria($id) {
        $this->viewBuilder() -> setLayout('site');

        $this ->loadModel('Produtos');
        $query = $this->Produtos->findByCategorias_produto_id($id);
        
        $this ->set('produtos',$query);
    }

}