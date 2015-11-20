<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('Controller', 'IngredientsController');


class CreationsEntreesController extends AppController {
    
    var $name="CreationsEntrees";
    
    public $uses = array('Ingredient','Unity');
         
   var $q=0; 
   var $u=0;
   function index() {
       parent::index();
       $q=  $this->Ingredient->find('list',array('fields'=>array('Ingre'),'empty'=>'Selection d\'un ingrédient'));
        $this->set('ingredients',$q);
       
        
          $u=  $this->Unity->find('list',array('fields'=>array('nom_unite'),'empty'=>'Selection d\'une unité'));
        $this->set('unitys',$u);
       
        $this->layout='default';
  
   }
           
    function add() {
        
         $q=  $this->Ingredient->find('list',array('fields'=>array('Ingre'),'empty'=>'Selection d\'un ingrédient'));
        $this->set('ingredients',$q);
       
        
          $u=  $this->Unity->find('list',array('fields'=>array('nom_unite'),'empty'=>'Selection d\'une unité'));
        $this->set('unitys',$u);
       
        $this->layout='default';
  


    echo $id_fiche=$this->request->params['named']['last_id'];
        echo '</br>';
        echo $id_list_plat=$this->request->params['named']['id_list_plat'];
          
         /** ------------------------------------------------------------------  */        
    if($this->request->is('post')){
        /* on vérifie si on a bien des champ non vide donc a posté => $_POST  */
        echo 'Des données sont entrée';
       
        // Des données ont été postées
       /* on prepare la création avec les nouvelle donnees    */
    
               
        $this->CreationsEntree->create();
        
         $data_fiche=$this->request->data;
         debug($data_fiche);
        if(!empty($data_fiche)){
      
            debug($data_fiche);

            debug($this->request->data['CreationsEntree']['id_list_plat']);
             debug($this->request->data['CreationsEntree']['id_fiche']);

        $this->request->data['CreationsEntree']['id_list_plat']=$id_list_plat;
$this->request->data['CreationsEntree']['id_fiche']=$id_fiche;

/* jusque là ça marche !!!    */

/*
            if ($this->CreationsEntree->save($data_fiche)) {
                $this->Session->setFlash('Votre fiche est sauvegardé');
                   
          
            }
            else {
                // Debug d'eventuelles erreurs
                debug($this->CreationsEntree->validationErrors);
                $this->Session->setFlash('la fiche n\'est pas sauvegardé. Please, try again.');
            }
 
 */
        }
 
  
       
     
    }
    }
    public $helpers = array('Html', 'Form','Js','Time');   // Lien vers les Form pour formulaire
                                                    // Lien Js pour les Javascipt
    
    
}  
    
    
    
 
        
         
          
          
          
          
       
              
       
                    
        
    
         

    
    
    

