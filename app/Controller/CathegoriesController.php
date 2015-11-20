<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CathegoriesController extends AppController {
    
    var $name="Cathegories";
    
    public $helpers=array('Html','Form','Session');
    public $components=array('Session','Auth');
    
    public function index() {
        parent::index();
    }
}