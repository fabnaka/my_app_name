<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;

class SiteController extends AppController{

    public function beforeFilter(EventInterface $event)
    {
        parent :: beforeFilter($event);
        $this->Auth->allow();
    }

    public function index(){
        $this->viewBuilder() -> setLayout('site');

        $this ->loadModel('Produtos');
        
        $produtos = $this->Produtos->find('all')->limit(4);

        $this ->set('produtos',$produtos);

    }
}