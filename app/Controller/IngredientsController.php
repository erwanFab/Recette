<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class IngredientsController extends AppController{
    
    
     var $name="Ingredients";
     public $uses = array('Ingredient','Cathegorie');
      public $helpers = array('Html', 'Form');
         
   var $q=0; 
   var $cate=0;
    
    function add(){
        
        $q=  $this->Ingredient->find('list',array('fields'=>array('Ingre'),'empty'=>'Selection d\'un ingrédient'));
        $this->set('ingredients',$q);
        
         $cate=  $this->Cathegorie->find('list',array('fields'=>array('cathegorie'),'empty'=>'Selection d\'une unité'));
        $this->set('cathego',$cate);
       
        $this->layout='default';
        
        
         if($this->request->is('post')){
        /* on vérifie si on a bien des champ non vide donc a posté => $_POST  */
        echo 'Des données ont été postées';
        // Des données ont été postées
       /* on prepare la création avec les nouvelle donnees    */
      
       
        
        $this->Ingredient->create();
        $data=$this->request->data;
        
        if(!empty($data)){
      debug($data);
           

        

/* jusque là ça marche !!!    */


            if ($this->Ingredient->save($data)) {
                debug($this->request->data['Ingredient']['Ingre']);
                $this->Session->setFlash('Votre ingrédient est sauvegardé.');
                return $this->redirect(array('controller'=>'Ingredients',
                                     'action'=>'add'
                                     
                    ));
          
            }
            else {
                // Debug d'eventuelles erreurs
                debug($this->Ingredient->validationErrors);
                $this->Session->setFlash('la fiche n\'est pas sauvegardé. Please, try again.');
            }
        }

       /* si echec de l'envoi des datas    */

       
     
    }  else {
        $this->Session->setFlash('Remplissez  les Ingrédients.');
           
        
    }
 }

} 
        
        
        
        
    
    
    
   
   
    
    
    
    
    
    
    
    
    
    
    

