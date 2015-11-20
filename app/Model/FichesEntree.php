<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FichesEntree extends AppModel {
    var $name='FichesEntree';
    
    
public $validate = array(
            
            'id_list_plat'=>array('numeric'=>
                                        array('rule'=>'/^[0-3]{1,}$/i',
                                                'required'=>true,
                                                'message'=>'Chiffre uniquement')),
            'id_fiche'=>array('numeric'=>
                                        array('rule'=>'/^[0-9]{1,4}$/i',
                                                'required'=>true,
                                                'message'=>'Chiffre uniquement')),
                       
            'Etapes'=>array(
                'notEmpty'=>array(
                    'rule'=>array('notEmpty'),
                )
                ),
            
            'thermos'=>array('numeric'=>
                                        array('rule'=>'/^[0-9]{1,3}$/i',
                                                'required'=>true,
                                                'message'=>'Chiffre uniquement')),
            
            'time'=>array(
                'notEmpty'=>array(
                    'rule'=>array('notEmpty'),
                )
                )/*,
            
            'quantite'=>array('numeric'=>
                                        array('rule'=>'/^[0-3]{1,}$/i',
                                                'required'=>true,
                                                'message'=>'Chiffre uniquement')),
            
    'id_ingredients'=>array('numeric'=>
                                        array('rule'=>'/^[0-3]{1,}$/i',
                                                'required'=>true,
                                                'message'=>'Chiffre uniquement')),
    'id_unity'=>array('numeric'=>
                                        array('rule'=>'/^[0-3]{1,}$/i',
                                                'required'=>true,
                                                'message'=>'Chiffre uniquement')),
    */
        );
       
       
}

Router::connect(
    '/:controller/:id',
    array('action' => 'index'),
    array('id' => '[0-9]+')
);

Router::connect(
    '/:controller/:id',
    array('action' => 'view'),
    array('id' => '[0-9]+')
);
Router::connect(
    '/:controller/:id_list_plat',
    array('action' => 'add'),
    array('id_list_plat' => '[0-9]+')
);
Router::connect(
    '/:controller/:id_list_plat/:id_fiche',
    array('action' => 'add'),
    array('id_fiche' => '[0-9]+')
);

Router::connect(
    '/:controller/:id_fiche/:id_inc',
    array('action' => 'edit'),
    array('id_fiche' => '[0-9]+')
);