<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 
foreach ($fiches as $f){
    
  #debug($f);
   
  
   
   
   
    ?>
<div class="fiche">

<h1 id="titredefiche"><?php echo $f["b"]["nom"];?></h1>

<fieldset id="cadreI">
    
    
    
    
    
 <h2 id="ingredients">
     
     
     
     <?php 
     # champ vide pour les ingrédiens 1
            if(!empty($f["a"]["quantite"])) {
               $quantite =$f["a"]["quantite"];
            }
            elseif (($f["a"]["quantite"])==0) {
                echo '';
            }
            else {
                $quantite ='';
            }
            
            
            
                     
            if(!empty($f['0']['ifnull( c.Ingre, 0 )'])) {
               $ingred =$f['0']['ifnull( c.Ingre, 0 )'];
            }else {
                
            }
           
            
            
            

            
            
            if(!empty($f['0']['ifnull (c1.nom_unite,0)'])) {
               $unity =$f['0']['ifnull (c1.nom_unite,0)'];
            }
            else {
                $unity ='';
            }
             if($f['0']['ifnull( c.Ingre, 0 )']=='0'){
                $quantite=$ingred=$unity='';
            }
    ?>
     <h2 id="ingredients"><?php echo $quantite;echo '  ';echo $unity;echo ' ';echo $ingred;?></h2> 
            
    <?php        
        # champ vide pour les ingrédiens 2
            if(!empty($f["a"]["quantite_2"])) {
               $quantite2 =$f["a"]["quantite_2"];
            }
            else {
                $quantite2 ='';
            }
            
            if(!empty($f['0']['ifnull( d.Ingre, 0 )'])) {
               $ingred2 =$f['0']['ifnull( d.Ingre, 0 )'];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull (d1.nom_unite,0)'])) {
               $unity2 =$f['0']['ifnull (d1.nom_unite,0)'];
            }
            else {
                $unity2 ='';
            }
            
             if($f['0']['ifnull( d.Ingre, 0 )']=='0'){
                $quantite2=$ingred2=$unity2='';
            }
    ?>
     <h2 id="ingredients"><?php echo $quantite2;echo '  ';echo $unity2;echo ' ';echo $ingred2;?></h2> 
            
    <?php         
     
            # champ vide pour les ingrédiens 3
            if(!empty($f["a"]["quantite_3"])) {
               $quantite3 =$f["a"]["quantite_3"];
            }else {
                $quantite3='';
            }
            
            if(!empty($f['0']['ifnull( e.Ingre, 0 )'])) {
               $ingred3 =$f['0']['ifnull( e.Ingre, 0 )'];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull (e1.nom_unite,0)'])) {
               $unity3 =$f['0']['ifnull (e1.nom_unite,0)'];
            }else {
                $unity3 ='';
            }    
             if($f['0']['ifnull( e.Ingre, 0 )']=='0'){
                $quantite3=$ingred3=$unity3='';
            }
       ?>
     <h2 id="ingredients"><?php echo $quantite3;echo '  ';echo $unity3;echo ' ';echo $ingred3;?></h2> 
            
    <?php        
            # champ vide pour les ingrédiens 4
            if(!empty($f["a"]["quantite_4"])) {
               $quantite4 =$f["a"]["quantite_4"];
            }else {
                $quantite4 ='';
            }
            
            if(!empty($f['0']['ifnull( f.Ingre, 0 )'])) {
               $ingred4 =$f['0']['ifnull( f.Ingre, 0 )'];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull (f1.nom_unite,0)'])) {
               $unity4 =$f['0']['ifnull (f1.nom_unite,0)'];
            }else {
                $unity4='';
            }  
             if($f['0']['ifnull( f.Ingre, 0 )']=='0'){
                $quantite4=$ingred4=$unity4='';
            }
          ?>
     <h2 id="ingredients"><?php echo $quantite4;echo '  ';echo $unity4;echo ' ';echo $ingred4;?></h2> 
            
    <?php 
             
            # champ vide pour les ingrédiens 5
            if(!empty($f["a"]["quantite_5"])) {
               $quantite5 =$f["a"]["quantite_5"];
            }else {
                $quantite5 ='';
            }
            
            if(!empty($f['0']['ifnull( g.Ingre, 0 )'])) {
               $ingred5 =$f['0']['ifnull( g.Ingre, 0 )'];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull (g1.nom_unite,0)'])) {
               $unity5 =$f['0']['ifnull (g1.nom_unite,0)'];
            }else {
                $unity5 ='';
            }  
             if($f['0']['ifnull( g.Ingre, 0 )']=='0'){
                $quantite5=$ingred5=$unity5='';
            }
            
          ?>
     <h2 id="ingredients"><?php echo $quantite5;echo '  ';echo $unity5;echo ' ';echo $ingred5;?></h2> 
            
    <?php    
            # champ vide pour les ingrédiens 6
            if(!empty($f["a"]['quantite_6'])) {
               $quantite6 =$f["a"]['quantite_6'];
            }else {
               if($f["a"]['quantite_6']==0){
                   $quantite6='';
               }
            }
            
             if(!empty($f['0']['ifnull( h.Ingre, 0 )'])) {
               $ingred6 =$f['0']['ifnull( h.Ingre, 0 )'];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull (h1.nom_unite,0)'])) {
               $unity6 =$f['0']['ifnull (h1.nom_unite,0)'];
            }else {
                
            } 
            
            if($f['0']['ifnull( h.Ingre, 0 )']=='0'){
                $quantite6=$ingred6=$unity6='';
            }
            
            
            
            
       ?>
     <h2 id="ingredients"><?php echo $quantite6;echo '  ';echo $unity6;echo ' ';echo $ingred6;?></h2> 
            
    <?php         
            # champ vide pour les ingrédiens 7
            if(!empty($f["a"]["quantite_7"])) {
               $quantite7 =$f["a"]["quantite_7"];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull( i.Ingre, 0 )'])) {
               $ingred7 =$f['0']['ifnull( i.Ingre, 0 )'];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull (i1.nom_unite,0)'])) {
               $unity7 =$f['0']['ifnull (i1.nom_unite,0)'];
            }else {
                
            } 
            
             if($f['0']['ifnull( i.Ingre, 0 )']=='0'){
                $quantite7=$ingred7=$unity7='';
            }
     ?>
     <h2 id="ingredients"><?php echo $quantite7;echo '  ';echo $unity7;echo ' ';echo $ingred7;?></h2> 
            
    <?php            
            # champ vide pour les ingrédiens 8
            if(!empty($f["a"]["quantite_8"])) {
               $quantite8 =$f["a"]["quantite_8"];
            }else {
                
            }
            
             if(!empty($f['0']['ifnull( j.Ingre, 0 )'])) {
               $ingred8 =$f['0']['ifnull( j.Ingre, 0 )'];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull (j1.nom_unite,0)'])) {
               $unity8 =$f['0']['ifnull (j1.nom_unite,0)'];
            }else {
                
            }  
             if($f['0']['ifnull( j.Ingre, 0 )']=='0'){
                $quantite8=$ingred8=$unity8='';
            }
  ?>
     <h2 id="ingredients"><?php echo $quantite8;echo '  ';echo $unity8;echo ' ';echo $ingred8;?></h2> 
            
    <?php               
            # champ vide pour les ingrédiens 9
            if(!empty($f["a"]["quantite_9"])) {
               $quantite9 =$f["a"]["quantite_9"];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull( k.Ingre, 0 )'])) {
               $ingred9 =$f['0']['ifnull( k.Ingre, 0 )'];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull (k1.nom_unite,0)'])) {
               $unity9 =$f['0']['ifnull (k1.nom_unite,0)'];
            }else {
                
            }  
            
             if($f['0']['ifnull( k.Ingre, 0 )']=='0'){
                $quantite9=$ingred9=$unity9='';
            }
         ?>
     <h2 id="ingredients"><?php echo $quantite9;echo '  ';echo $unity9;echo ' ';echo $ingred9;?></h2> 
            
    <?php   
            # champ vide pour les ingrédiens 10
            if(!empty($f["a"]["quantite_10"])) {
               $quantite10 =$f["a"]["quantite_10"];
            }else {
                
            }  
            
           if(!empty($f['0']['ifnull( l.Ingre, 0 )'])) {
               $ingred10 =$f['0']['ifnull( l.Ingre, 0 )'];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull (l1.nom_unite,0)'])) {
               $unity10 =$f['0']['ifnull (l1.nom_unite,0)'];
            } else {
                
            }   
             if($f['0']['ifnull( l.Ingre, 0 )']=='0'){
                $quantite10=$ingred10=$unity10='';
            }
     ?>
     <h2 id="ingredients"><?php echo $quantite10;echo '  ';echo $unity10;echo ' ';echo $ingred10;?></h2> 
            
    <?php         
            # champ vide pour les ingrédiens 11
            if(!empty($f["a"]["quantite_11"])) {
               $quantite11 =$f["a"]["quantite_11"];
            }else {
                
            }  
            
            if(!empty($f['0']['ifnull( m.Ingre, 0 )'])) {
               $ingred11 =$f['0']['ifnull( m.Ingre, 0 )'];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull (m1.nom_unite,0)'])) {
               $unity11 =$f['0']['ifnull (m1.nom_unite,0)'];
            }else {
                
            }    
            
             if($f['0']['ifnull( m.Ingre, 0 )']=='0'){
                $quantite11=$ingred11=$unity11='';
            }
       ?>
     <h2 id="ingredients"><?php echo $quantite11;echo '  ';echo $unity11;echo ' ';echo $ingred11;?></h2> 
            
    <?php       
            # champ vide pour les ingrédiens 12
            if(!empty($f["a"]["quantite_12"])) {
               $quantite12 =$f["a"]["quantite_12"];
            }else {
                
            }  
            
            if(!empty($f['0']['ifnull( n.Ingre, 0 )'])) {
               $ingred12 =$f['0']['ifnull( n.Ingre, 0 )'];
            }else {
                
            } 
            
            if(!empty($f['0']['ifnull (n1.nom_unite,0)'])) {
               $unity12 =$f['0']['ifnull (n1.nom_unite,0)'];
            } else {
                
            }  
            
             if($f['0']['ifnull( n.Ingre, 0 )']=='0'){
                $quantite12=$ingred12=$unity12='';
            }
        ?>
     <h2 id="ingredients"><?php echo $quantite12;echo '  ';echo $unity12;echo ' ';echo $ingred12;?></h2> 
            
    <?php      
            # champ vide pour les ingrédiens 13
            if(!empty($f["a"]["quantite_13"])) {
               $quantite13 =$f["a"]["quantite_13"];
            }else {
                
            }  
            
            if(!empty($f['0']['ifnull( o.Ingre, 0 )'])) {
               $ingred13 =$f['0']['ifnull( o.Ingre, 0 )'];
            }else {
                
            }  
            
            if(!empty($f['0']['ifnull (o1.nom_unite,0)'])) {
               $unity13 =$f['0']['ifnull (o1.nom_unite,0)'];
            } else {
                
            }   
            
             if($f['0']['ifnull( o.Ingre, 0 )']=='0'){
                $quantite13=$ingred13=$unity13='';
            }
    ?>
     <h2 id="ingredients"><?php echo $quantite13;echo '  ';echo $unity13;echo ' ';echo $ingred13;?></h2> 
            
    <?php          
            # champ vide pour les ingrédiens 14
            if(!empty($f["a"]["quantite_14"])) {
               $quantite14 =$f["a"]["quantite_14"];
            }else {
                
            }  
            if(!empty($f['0']['ifnull( p.Ingre, 0 )'])) {
               $ingred14 =$f['0']['ifnull( p.Ingre, 0 )'];
            }else {
                
            } 
            
            if(!empty($f['0']['ifnull (p1.nom_unite,0)'])) {
               $unity14 =$f['0']['ifnull (p1.nom_unite,0)'];
            } else {
                
            }   
            
             if($f['0']['ifnull( p.Ingre, 0 )']=='0'){
                $quantite14=$ingred14=$unity14='';
            }
     ?>
     <h2 id="ingredients"><?php echo $quantite14;echo '  ';echo $unity14;echo ' ';echo $ingred14;?></h2> 
            
    <?php         
            # champ vide pour les ingrédiens 15
            if(!empty($f["a"]["quantite_15"])) {
               $quantite15 =$f["a"]["quantite_15"];
            }else {
                
            }  
            
           if(!empty($f['0']['ifnull( q.Ingre, 0 )'])) {
               $ingred15 =$f['0']['ifnull( q.Ingre, 0 )'];
            }else {
                
            }
            
            if(!empty($f['0']['ifnull (q1.nom_unite,0)'])) {
               $unity15 =$f['0']['ifnull (q1.nom_unite,0)'];
            } else {
                
            }  
             if($f['0']['ifnull( q.Ingre, 0 )']=='0'){
                $quantite15=$ingred15=$unity15='';
            }
    ?>
     <h2 id="ingredients"><?php echo $quantite15;echo '  ';echo $unity15;echo ' ';echo $ingred15;?></h2> 
            

</fieldset>
 <h2 id="Etapes"><?php echo $f["a"]["Etapes"];?></h2> 
 

 <h2 id="four">
     
     <?php echo 'Thermostat :  <b>  '.$f["a"]["thermos"].' °C</b></br>  ';echo 'Temps :   <b>'. $f["a"]["time"].'</b>';?> 
 </h2>
 

</div>
<fieldset id="cadreII">
     
    <?php
// Icone de Retour 
 # create references to the images
  $nouvelle = $this->html->image('Return_small.gif', array('alt' => '', 'title'=>'Retour'));

 # use the images in CakePHP HTML links
  echo $this->Html->link($nouvelle, 
 array('controller' => 'NewsEntrees', 
'action' => 'index',
     'id'=>$f['a']['id_list_plat']
    
 ),
 array('class' => 'icon_action','escape' => false));
   ?>
 </fieldset>   
    
    
    
    
<fieldset id="cadreIII">
<?php
// Icone de Modification
# create references to the images
  $nouvelle = $this->html->image('editer.gif', array('alt' => '', 'title'=>'Editer'));

 # use the images in CakePHP HTML links
  echo $this->Html->link($nouvelle, 
 array('controller' => 'FichesEntrees', 
'action' => 'edit',
     'id_fiche'=>$this->request->params['pass'],
     'id_inc'=>$f['a']['id']
     
 ),
 array('class' => 'icon_action','escape' => false));




?>

</fieldset>  
     
 
 
<?php    
};
