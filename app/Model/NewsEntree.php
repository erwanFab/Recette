<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class NewsEntree extends AppModel {
    var $name='NewsEntree';
    
    public $validate=array(
        'id_list_plat'=>array('numeric'=>
                                        array('rule'=>'/^[0-3]{1,}$/i',
                                                'required'=>true,
                                                'message'=>'Chiffre uniquement')),
        
        'nom'=>array('alphanumeric'=>
                                        array('rule'=>'/^[.-_\s\S]{3,}$/i',
                                                'required'=>'create',
                                                'message'=>'Chiffre et lettre uniquement')),
        'commentaire'=>array('alphanumeric'=>
                                        array('rule'=>'/^[.-_\s\S]{3,}$/i',
                                                'required'=>'create',
                                                'message'=>'Chiffre et lettre uniquement')),
        'nbr_perssonnes'=>'numeric'
        
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
    '/:controller/:id',
    array('action' => 'add'),
    array('id' => '[0-9]+')
);

?>