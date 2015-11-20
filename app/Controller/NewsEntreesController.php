<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class NewsEntreesController extends AppController {
    
    var $name="NewsEntrees";
    
    public $helpers=array('Html','Form','Session');
    public $components=array('Session','Auth');
    
    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }
    
    
    
    function index() {
 /**    Permet de recupérer les titree des Entrées  **/   
        
           
                 
                 
          $content= $this->request->params['named'];
         
          foreach ($content as $valueid){
              
             
          }
         $specifiquementCeluiCi = $this->NewsEntree->find('all', array(
        'conditions' => array('id_list_plat' => $valueid),
             'order' => array('nom'=>'ASC')
    ));
        
        $this->set('entrees',$specifiquementCeluiCi);
     
/****   ----------------------------------------------------------------    **/
        
// search function   
       $conditions = array();
		//Transform POST into GET
		if(($this->request->is('post') || $this->request->is('put')) && isset($this->data['Filter'])){
			$filter_url['controller'] = $this->request->params['controller'];
			$filter_url['action'] = $this->request->params['named'];
			debug($this->request->params['named']);
			// for each filter we will add a GET parameter for the generated url
			foreach($this->data['Filter'] as $name => $value){
                            debug($value);
				if($value){
					// You might want to sanitize the $value here
					// or even do a urlencode to be sure
					$filter_url[$name] = urlencode($value);
				}
			}	
			// now that we have generated an url with GET parameters, 
			// we'll redirect to that page
			return $this->redirect($filter_url);
		} else {
			// Inspect all the named parameters to apply the filters
			foreach($this->params['named'] as $param_name => $value){
                            
                            
				
                            if(!empty($this->params['named']['search'])){
                
                                $specifiquenom = $this->NewsEntree->find('all', array(
                                                             'conditions' => array(
                                                             'nom LIKE' => '%'.$this->params['named']['search'].'%')
                                                            ));
                                $this->set('entrees', $specifiquenom);    
                
                            }
                            
                            
                        }
                }
    }
        
        
        
    
    
    public function view() {
        
         $content= $this->request->params['named'];
         
          foreach ($content as $valueid){
             
          }
         $specifiquementCeluiCi = $this->NewsEntree->find('all', array(
        'conditions' => array('id_list_plat' => $valueid)
    ));
        
        $this->set('entrees',$specifiquementCeluiCi);
        
	}
        
        public function add($id_list_plat=null,$nom=null,$comentaire=null,$nrb_perssonnes=null) {

      /* Pour récupérer l'id sur l'url  */      
      
            $content= $this->request->params['named'];
         
          foreach ($content as $valueid){
             
             
             $this->set('plat',$valueid);
             
             
             
          }
         $specifiquementCeluiCi = $this->NewsEntree->find('all', array(
        'conditions' => array('id_list_plat' => $valueid)
    ));
        
        $this->set('entrees',$specifiquementCeluiCi);
        
/***------------------------------------------------------------------  */	
         
   $q=  $this->NewsEntree->find('all');
             
   foreach ($q as $recette){
       
   };
       
/** ------------------------------------------------------------------  */        
    if($this->request->is('post')){
        /* on vérifie si on a bien des champ non vide donc a posté => $_POST  */
        echo 'Des données ont été postées';
        // Des données ont été postées
       /* on prepare la création avec les nouvelle donnees    */
      
        
        
        
        $this->NewsEntree->create();
        $data=$this->request->data;
        
        if(!empty($data)){
      
            #debug($data);

           # debug($this->request->data['NewsEntree']['id_list_plat']);

        $this->request->data['NewsEntree']['id_list_plat']=$id_list_plat;


/* jusque là ça marche !!!    */


            if ($this->NewsEntree->save($data)) {
                $this->Session->setFlash('Votre fiche est en court de sauvegarde </br>Appuyer sur suivant.');
                    $lastid=  $this->NewsEntree->getLastInsertId();
               # debug($lastid);
                $this->set('id_fiche',$lastid);
          
            }
            else {
                // Debug d'eventuelles erreurs
               # debug($this->NewsEntree->validationErrors);
                $this->Session->setFlash('la fiche n\'est pas sauvegardé. Please, try again.');
            }
        }

       /* pour récupérer le nouvelle id    */

       
    }
 }

} 
  
