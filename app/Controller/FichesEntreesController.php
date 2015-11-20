<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class FichesEntreesController extends AppController {
    
    var $name="FichesEntrees";
     public $uses = array('Ingredient','Unity','FichesEntree');
     public $components = array('Session');
     public $helpers = array('Html', 'Form','Js','Time','Session');   // Lien vers les Form pour formulaire
                                                    // Lien Js pour les Javascipt
  
     function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }
     
     
     
     
    function index() {
       
       
       
      $content= $this->request->params['pass'];
       
       foreach ($content as $valeur){
           
       }
       
         $query=  $this->FichesEntree->query("SELECT a.id,a.id_list_plat, b.`nom` , a.`Etapes` ,
      ifnull( c.Ingre, 0 ) , quantite,ifnull (c1.nom_unite,0),
     ifnull( d.Ingre, 0 ) ,quantite_2,ifnull (d1.nom_unite,0),
     ifnull( e.Ingre, 0 ) ,quantite_3,ifnull (e1.nom_unite,0),
      ifnull( f.Ingre, 0 ) ,quantite_4,ifnull (f1.nom_unite,0),
      ifnull( g.Ingre, 0 ) , quantite_5,ifnull (g1.nom_unite,0),
     ifnull( h.Ingre, 0 ) , quantite_6,ifnull (h1.nom_unite,0),
     ifnull( i.Ingre, 0 ),quantite_7,ifnull (i1.nom_unite,0),
ifnull( j.Ingre, 0 ),quantite_8,ifnull (j1.nom_unite,0),    
ifnull( k.Ingre, 0 ),quantite_9,ifnull (k1.nom_unite,0),
ifnull( l.Ingre, 0 ),quantite_10,ifnull (l1.nom_unite,0),
ifnull( m.Ingre, 0 ),quantite_11,ifnull (m1.nom_unite,0),
ifnull( n.Ingre, 0 ),quantite_12,ifnull (n1.nom_unite,0),
ifnull( o.Ingre, 0 ),quantite_13,ifnull (o1.nom_unite,0),
ifnull( p.Ingre, 0 ),quantite_14,ifnull (p1.nom_unite,0),
ifnull( q.Ingre, 0 ),quantite_15,ifnull (q1.nom_unite,0),
thermos,time
FROM fiches_entrees a
LEFT OUTER JOIN news_entrees b ON a.id_fiche = b.id
LEFT OUTER JOIN ingredients c ON a.id_ingredients = c.id
LEFT OUTER JOIN ingredients d ON a.id_ingredients_2 = d.id
LEFT OUTER JOIN ingredients e ON a.id_ingredients_3 = e.id
LEFT OUTER JOIN ingredients f ON a.id_ingredients_4 = f.id
LEFT OUTER JOIN ingredients g ON a.id_ingredients_5 = g.id
LEFT OUTER JOIN ingredients h ON a.id_ingredients_6 = h.id
LEFT OUTER JOIN ingredients i ON a.id_ingredients_7 = i.id
LEFT OUTER JOIN ingredients j ON a.id_ingredients_8 = j.id
LEFT OUTER JOIN ingredients k ON a.id_ingredients_9 = k.id
LEFT OUTER JOIN ingredients l ON a.id_ingredients_10 = l.id
LEFT OUTER JOIN ingredients m ON a.id_ingredients_11 = m.id
LEFT OUTER JOIN ingredients n ON a.id_ingredients_12 = n.id
LEFT OUTER JOIN ingredients o ON a.id_ingredients_13 = o.id
LEFT OUTER JOIN ingredients p ON a.id_ingredients_14 = p.id
LEFT OUTER JOIN ingredients q ON a.id_ingredients_15 = q.id

LEFT OUTER JOIN unities c1 ON a.id_unity = c1.id
LEFT OUTER JOIN unities d1 ON a.id_unity_2 = d1.id
LEFT OUTER JOIN unities e1 ON a.id_unity_3 = e1.id
LEFT OUTER JOIN unities f1 ON a.id_unity_4 = f1.id
LEFT OUTER JOIN unities g1 ON a.id_unity_5 = g1.id
LEFT OUTER JOIN unities h1 ON a.id_unity_6 = h1.id
LEFT OUTER JOIN unities i1 ON a.id_unity_7 = i1.id
LEFT OUTER JOIN unities j1 ON a.id_unity_8 = j1.id
LEFT OUTER JOIN unities k1 ON a.id_unity_9 = k1.id
LEFT OUTER JOIN unities l1 ON a.id_unity_10 = l1.id
LEFT OUTER JOIN unities m1 ON a.id_unity_11 = m1.id
LEFT OUTER JOIN unities n1 ON a.id_unity_12 = n1.id
LEFT OUTER JOIN unities o1 ON a.id_unity_13 = o1.id
LEFT OUTER JOIN unities p1 ON a.id_unity_14 = p1.id
LEFT OUTER JOIN unities q1 ON a.id_unity_15 = q1.id

WHERE id_fiche=".$valeur
              
               ); 
       
               
       
     
               $this->set('fiches',$query);
       
    
            
        
           
       
    }
    
    
    public function edit($id_inc=null){
        
        
        
            $q=  $this->Ingredient->find('list',array('fields'=>array('id','Ingre'),'empty'=>'Selection d\'un ingrédient'));
        $this->set('ingredients',$q);
       
        
          $u=  $this->Unity->find('list',array('fields'=>array('id','nom_unite'),'empty'=>'Selection d\'une unité'));
        $this->set('unitys',$u);
       
        $this->layout='default'; 
    
          $id_inc=  $this->request->params['named']['id_inc'];
          
          
           if  (!$id_inc)  {
        throw  new  NotFoundException(__('Invalid post'));
    }

    $fiche  =  $this->FichesEntree->findById($id_inc);
   
    if  (!$fiche)  {
        throw  new  NotFoundException(__('Invalid post'));
    }

    if  ($this->request->is(array('post','put')))  {
        $this->FichesEntree->id  =  $id_inc;
        echo 'On obtient le N° de la fiche'.$id_inc;
        $this->request->data['FichesEntree']['id']=$id_inc;
        
        
        
        
        
        
         $this->request->data['FichesEntree']['id_list_plat']=$fiche['FichesEntree']['id_list_plat'];
        $this->request->data['FichesEntree']['id_fiche']=$fiche['FichesEntree']['id_fiche'];
        
          
        
       
        $modif_Fiche=$this->request->data;
       
        
        if  ($this->FichesEntree->saveAll($modif_Fiche))  {
            echo 'on rentre';
            $this->Session->setFlash(__('Your post has been updated.'));
            return  $this->redirect(array('controller'=>'NewsEntrees','action'  =>  'index','id'=>$fiche['FichesEntree']['id_list_plat']));
        }
        
       #debug($this->FichesEntree->validationErrors);
        
        $this->Session->setFlash(__('Unable to update your post.'));
        
        
        
    }

    if  (!$this->request->data)  {
        $this->request->data  =  $fiche;
    }
}

    
    
    
     public function add($id_list_plat=null,$id_fiche=null,$Etapes=null,
                         $id_ingredients1=null,$quantite=null,$id_unity=null,
                         $id_ingredients_2=null,$quantite_2=null,$id_unity_2=null,
             
             
             
             
             
             $thermos=null,$time=null) {

        
      
            $q=  $this->Ingredient->find('list',array('fields'=>array('id','Ingre'),'empty'=>'Selection d\'un ingrédient'));
        $this->set('ingredients',$q);
       
        
          $u=  $this->Unity->find('list',array('fields'=>array('id','nom_unite'),'empty'=>'Selection d\'une unité'));
        $this->set('unitys',$u);
       
        $this->layout='default'; 
        
         /* Pour récupérer l'id sur l'url  */   
         $id_list_plat= $this->request->params['named']['id_list_plat'];
           
         $id_fiche= $this->request->params['named']['id_fiche'];
        
        
           $this->request->data['FichesEntree']['id_list_plat']=$id_list_plat;
        $this->request->data['FichesEntree']['id_fiche']=$id_fiche;
         
/***------------------------------------------------------------------  */	
         
  $data=$this->request->data;
  
  
  

       
/** ------------------------------------------------------------------  */        
    if($this->request->is('post')){
        /* on vérifie si on a bien des champ non vide donc a posté => $_POST  */
        echo 'Des données ont été postées';
        // Des données ont été postées
       /* on prepare la création avec les nouvelle donnees    */
      
       
        
        $this->FichesEntree->create();
        $data=$this->request->data;
        
        if(!empty($data)){
      
           

        

/* jusque là ça marche !!!    */


            if ($this->FichesEntree->save($data)) {
                debug($this->request->data['FichesEntree']['id_list_plat']);
                $this->Session->setFlash('Votre fiche est sauvegardé.');
                return $this->redirect(array('controller'=>'NewsEntrees',
                                     'action'=>'index',
                                     'id'=> $this->request->data['FichesEntree']['id_list_plat']
                    ));
          
            }
            else {
                // Debug d'eventuelles erreurs
                //debug($this->FichesEntree->validationErrors);
                $this->Session->setFlash('la fiche n\'est pas sauvegardé. Please, try again.');
            }
        }

       /* si echec de l'envoi des datas    */

       
     
    }  else {
        $this->Session->setFlash('Remplissez les Etapes puis les Ingrédients.');
           
        
    }
 }

} 
  

    
   
?>