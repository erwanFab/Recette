<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cathegories extends AppModel{
    
    var $name='Cathegorie';
    
     public $validate = array(
            
            'type'=>array('numeric'=>
                                        array('rule'=>'/^[0-9]{1,}$/i',
                                                'required'=>true,
                                                'message'=>'Chiffre uniquement')),
            
            'Ingre'=>array('rule'=>'notEmpty')
            
            
        );
}