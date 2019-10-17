<?php

namespace app\controllers;

class SearchController extends AppController{
    public function typeaheadAction(){
        if($this->isAjax()){
           $query = !empty(trim($_GET['query'])) ? trim($_GET['query']) : null;
        //    echo $query;
           if($query){
               $products = \R::getAll('SELECT id, title FROM product WHERE title LIKE ? LIMIT 11',["%{$query}%"]);
            //    debug($products);
            // $logs = \R::getDatabaseAdapter()->getDatabase()->getLogger();
            // debug($logs->grep('SELECT'));
            // debug($query);
               echo json_encode($products);
           } 
        }
        die;
    }


    public function indexAction(){
        $query = !empty(trim($_GET['s'])) ? trim($_GET['s']) : null;
        if($query){
            $products = \R::find('product', "title LIKE ?", ["%{$query}%"]);
        }
        $this->setMeta('Поиск по ' . h($query) );
        $this->set(compact('products', 'query'));
    }


}