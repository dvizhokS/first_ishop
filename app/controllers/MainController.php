<?php

namespace app\controllers;


class MainController extends AppController{

    
    public function indexAction(){
        // echo __METHOD__;
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane'];
        $this->set(compact('name', 'age', 'names'));
    }

}