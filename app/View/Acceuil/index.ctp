


<table width="100%" border="1">
     <tr id="tab_title">
         <td colspan="2"width="75%">
<?php

# create references to the images
  $edit_img = $this->html->image('Logo.png', array('alt' => '', 'title'=>'Acceuil'));

 # use the images in CakePHP HTML links
  echo $this->Html->link($edit_img, 
 array('controller' => 'Acceuil', 
'action' => 'index',
 ),
 array('class' => 'icon_action',    'escape' => false));




?>      
             </td>
             <td id="titre"rowspan="2">
             <div class="encadrement">    
                 <h1 id="titre">Les recettes de maman</h1>
            <div class ="Choix_block" >      
                <div class="card-container">
                <div class="card">
                <div class="side"></div>
                <div class="side back">

<?php
echo $this->Html->link( 'Plat', 
array('controller'=>'NewsEntrees', 
'id'=>2,
'action'=>'index'),
 array('escape' => FALSE) ); 
?>

    
</div>
                </div>
                </div>

                <div class="Plat-container">
                <div class="card_des_Plats">
                <div class="side_Avant"></div>
                <div class="side_Avant back">
<?php
echo $this->Html->link( 'Entree', 
array('controller'=>'NewsEntrees', 
'id'=>1,
'action'=>'index'),
 array('escape' => FALSE) ); 
?>
</div>
                </div>
                </div>

                <div class="Dessert-container">
                <div class="card_des_Dessert">
                <div class="side_D"></div>
                <div class="side_D back">
<?php
echo $this->Html->link( 'Dessert', 
array('controller'=>'NewsEntrees', 
'id'=>3,
'action'=>'index'),
 array('escape' => FALSE) ); 
?>
</div>
                </div>
                </div>

            </div>

            </div>

             </td>
         </tr>
         <tr id="Ligne_Login">
             <td id="Login" rowspan="2" width="25%"> 
                 
                <?php 
                
                
               // Icone de Retour 
 # create references to the images
  $connection = $this->html->image('se_connecter.jpg', array('alt' => '', 'title'=>'se connecter'));

 # use the images in CakePHP HTML links
  echo $this->Html->link($connection, 
 array('controller' => 'Users', 
        'action' => 'login'
     
    
 ),
 array('class' => 'icon_action','escape' => false));
  
  
     
      
  
   ?>
             </td>
        
             
              
         </tr>
         
</table>


