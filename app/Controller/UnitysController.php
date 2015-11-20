<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UnitysController extends AppController {
    
   
    
    function index() {
        
          $u=  $this->Unity->find('list',array('fields'=>array('nom_unite'),'empty'=>'Selection d\'une unité'));
        $this->set('unitys',$u);
        
        
    }
     public $helpers = array('Html', 'Form');
    
}