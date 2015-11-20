<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CreationsEntree extends AppModel{
    
        var $name='CreationsEntree';
        
        public $validate = array(
            
            'id_list_plat'=>array('numeric'=>
                                        array('rule'=>'/^[0-3]{1,}$/i',
                                                'required'=>true,
                                                'message'=>'Chiffre uniquement')),
            'id_fiche'=>array('numeric'=>
                                        array('rule'=>'/^[0-3]{1,}$/i',
                                                'required'=>true,
                                                'message'=>'Chiffre uniquement')),
                       
            'Etapes'=>array('rule'=>'notEmpty'),
            
            'thermos'=>array('numeric'=>
                                        array('rule'=>'/^[0-9]{3,}$/i',
                                                'required'=>true,
                                                'message'=>'Chiffre uniquement')),
            
            'time'=>array('numeric'=>
                                        array('rule'=>'/^([0-9]{1,2}\:){3}$/i',
                                                
                                                'message'=>'Chiffre uniquement')),
            
            
            
        );
    
}