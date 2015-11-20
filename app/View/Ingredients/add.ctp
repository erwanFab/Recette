

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo $this->Form->create('Ingredient');

?>
<div class="formulaire_fiche">
    <?php
   
    ?>
 
           
                

      
    <div class="Etapes_comentaire">
        
      
<table>
    <caption>Sélections des ingrédients</caption>
    <tr></tr>
    <tr>
        <td class="td-ingredient"><?php echo $this->Form->input('type',array('label'=>'Type','options'=>$cathego,'id'=>'type','empty'=>'choisissez')); ?></td>
        
        
        <td class="td-unity"><?php echo $this->Form->input('Ingre',array('label'=>'Nouvelle Ingrédient')); ?></td>
        
         
    </tr>
   
    
     
</table>
    
        
<div id="save">
        <?php
       /* boutton d'envoie de validation  
        * save.gif et juste une photo pour illustrer le boutton
        */
        
        
            echo $this->Form->end('save.gif');
       ?>
</div>
    
    
    
    </div>
</div>
