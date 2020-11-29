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

    }
}