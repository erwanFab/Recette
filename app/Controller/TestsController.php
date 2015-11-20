<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TestsController extends AppController{
    
   public $uses = array('Ingredient','Unity');
    public function index(){
        $this->layout='default';
       
         $q=  $this->Ingredient->find('list',array('fields'=>array('Ingre'),'empty'=>'Selection d\'un ingrédient'));
        $this->set('ingredients',$q);
       
        
          $u=  $this->Unity->find('list',array('fields'=>array('nom_unite'),'empty'=>'Selection d\'une unité'));
        $this->set('unitys',$u);
       
        
        
}
    
    
    
    
}
