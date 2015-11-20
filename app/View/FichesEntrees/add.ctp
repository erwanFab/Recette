<?php



echo $this->Html->script("jquery-1.11.3",array('inline'=>false));
echo $this->Html->script("jquery-ui",array('inline'=>false));
echo $this->Html->script("ckeditor/ckeditor",array('inline'=>false));
echo $this->Html->script("jquery-timepicker",array('inline'=>false));
/*
 * Début d'un formulaire pour une nouvelle fiche
 * d'ingrédients des etapes pour la recette 
 * le thermos pour le four et le temps de cuisson
 */


echo $this->Form->create('FichesEntree');

?>
<div class="formulaire_fiche">
    <?php
   
    ?>
 
           
                

      
    <div class="Etapes_comentaire">
        
      <?php
 echo $this->Form->label('Les étapes :');
 echo $this->Form->textarea('Etapes',array('col'=>'100','rows'=>'20','class'=>'ckeditor'));

 ?>
<table>
    <caption>Sélections des ingrédients</caption>
    <tr>
        <td class="td-ingredient"><?php echo $ingred=$this->Form->input('id_ingredients',array('label'=>'','options'=>$ingredients,'id'=>'id_ingredients','empty'=>'choisissez')); ?></td>
        
        <td class="td-quantite"><?php echo $quantite= $this->Form->number('quantite',array('id'=>'quantite','class'=>'quantite'));?></td>
        
        <td class="td-unity"><?php echo $unity=$this->Form->input('id_unity',array('label'=>'','options'=>$unitys,'id'=>'id_unity','empty'=>'choisissez')); ?></td>
        
         
    </tr>
    <tr>
        <td class="td-ingredient"><?php echo $ingred=$this->Form->input('id_ingredients_2',array('label'=>'','options'=>$ingredients,'id'=>'id_ingredients','empty'=>'choisissez')); ?></td>
        
        <td class="td-quantite"><?php echo $quantite= $this->Form->number('quantite_2',array('id'=>'quantite','class'=>'quantite'));?></td>
        
        <td class="td-unity"><?php echo $unity=$this->Form->input('id_unity_2',array('label'=>'','options'=>$unitys,'id'=>'id_unity','empty'=>'choisissez')); ?></td>
        
        
    </tr>
    <tr>
        <td class="td-ingredient"><?php echo $ingred=$this->Form->input('id_ingredients_3',array('label'=>'','options'=>$ingredients,'id'=>'id_ingredients','empty'=>'choisissez')); ?></td>
        
        <td class="td-quantite"><?php echo $quantite= $this->Form->number('quantite_3',array('id'=>'quantite','class'=>'quantite'));?></td>
        
        <td class="td-unity"><?php echo $unity=$this->Form->input('id_unity_3',array('label'=>'','options'=>$unitys,'id'=>'id_unity','empty'=>'choisissez')); ?></td>
        
         
    </tr>
    <tr>
        <td class="td-ingredient"><?php echo $ingred=$this->Form->input('id_ingredients_4',array('label'=>'','options'=>$ingredients,'id'=>'id_ingredients','empty'=>'choisissez')); ?></td>
        
        <td class="td-quantite"><?php echo $quantite= $this->Form->number('quantite_4',array('id'=>'quantite','class'=>'quantite'));?></td>
        
        <td class="td-unity"><?php echo $unity=$this->Form->input('id_unity_4',array('label'=>'','options'=>$unitys,'id'=>'id_unity','empty'=>'choisissez')); ?></td>
        
        
    </tr>
    <tr>
        <td class="td-ingredient"><?php echo $ingred=$this->Form->input('id_ingredients_5',array('label'=>'','options'=>$ingredients,'id'=>'id_ingredients','empty'=>'choisissez')); ?></td>
        
        <td class="td-quantite"><?php echo $quantite= $this->Form->number('quantite_5',array('id'=>'quantite','class'=>'quantite'));?></td>
        
        <td class="td-unity"><?php echo $unity=$this->Form->input('id_unity_5',array('label'=>'','options'=>$unitys,'id'=>'id_unity','empty'=>'choisissez')); ?></td>
        
        
    </tr>
    <tr>
       <td class="td-ingredient"><?php echo $ingred=$this->Form->input('id_ingredients_6',array('label'=>'','options'=>$ingredients,'id'=>'id_ingredients','empty'=>'choisissez')); ?></td>
        
        <td class="td-quantite"><?php echo $quantite= $this->Form->number('quantite_6',array('id'=>'quantite','class'=>'quantite'));?></td>
        
        <td class="td-unity"><?php echo $unity=$this->Form->input('id_unity_6',array('label'=>'','options'=>$unitys,'id'=>'id_unity','empty'=>'choisissez')); ?></td>
           
    </tr>
    <tr>
        <td class="td-ingredient"><?php echo $ingred=$this->Form->input('id_ingredients_7',array('label'=>'','options'=>$ingredients,'id'=>'id_ingredients','empty'=>'choisissez')); ?></td>
        
        <td class="td-quantite"><?php echo $quantite= $this->Form->number('quantite_7',array('id'=>'quantite','class'=>'quantite'));?></td>
        
        <td class="td-unity"><?php echo $unity=$this->Form->input('id_unity_7',array('label'=>'','options'=>$unitys,'id'=>'id_unity','empty'=>'choisissez')); ?></td>
        
        
    </tr>
    
    <tr>
        <td class="td-ingredient"><?php echo $ingred=$this->Form->input('id_ingredients_8',array('label'=>'','options'=>$ingredients,'id'=>'id_ingredients','empty'=>'choisissez')); ?></td>
        
        <td class="td-quantite"><?php echo $quantite= $this->Form->number('quantite_8',array('id'=>'quantite','class'=>'quantite'));?></td>
        
        <td class="td-unity"><?php echo $unity=$this->Form->input('id_unity_8',array('label'=>'','options'=>$unitys,'id'=>'id_unity','empty'=>'choisissez')); ?></td>
        
        
    </tr>
    <tr>
        <td class="td-ingredient"><?php echo $ingred=$this->Form->input('id_ingredients_9',array('label'=>'','options'=>$ingredients,'id'=>'id_ingredients','empty'=>'choisissez')); ?></td>
        
        <td class="td-quantite"><?php echo $quantite= $this->Form->number('quantite_9',array('id'=>'quantite','class'=>'quantite'));?></td>
        
        <td class="td-unity"><?php echo $unity=$this->Form->input('id_unity_9',array('label'=>'','options'=>$unitys,'id'=>'id_unity','empty'=>'choisissez')); ?></td>
        
    </tr>
    <tr>
        <td class="td-ingredient"><?php echo $ingred=$this->Form->input('id_ingredients_10',array('label'=>'','options'=>$ingredients,'id'=>'id_ingredients','empty'=>'choisissez')); ?></td>
        
        <td class="td-quantite"><?php echo $quantite= $this->Form->number('quantite_10',array('id'=>'quantite','class'=>'quantite'));?></td>
        
        <td class="td-unity"><?php echo $unity=$this->Form->input('id_unity_10',array('label'=>'','options'=>$unitys,'id'=>'id_unity','empty'=>'choisissez')); ?></td>
        
        <td class="td-add"><?php 
            
        
        echo $button=$this->Form->submit('edit_add.png',
                                                            array('onClick'=>"$(this).addClone();",
                                                                'type'=>'button',
                                                                'class'=>'clone'
                                                             )); ?>
        </td>
        <td class="td-suppr"><?php echo $this->Form->submit('del.gif',
                                                            array('onClick'=>"$(this).killClone();",
                                                                'type'=>'button',
                                                                'class'=>'clone'
                                                             )); ?>
       </td>    
    </tr>
</table>
    
        <div id="time">
 <?php
  echo '</br>';
   echo '</br>';
 
 echo '</br>';
 echo $this->Form->input('time',array(  'label'=>'Time & Thermostat',
                                        'empty'=>'00:00:00',
                                        'type'=>'text',
                                        'id'=>'datepicker',
                                        
                                        'class'=>'timepicker'
                                            
                                        
 ));
 ?>
        </div>
        <div id="thermos">
        <?php

 
 echo $this->Form->input('thermos',array('type'=>'select',
                                            'id'=>'thermos',
                                            'label'=>'',
                                            'options' => array(
                                                       '0'=>'0°C',
                                                      '150'=>'150°C',
                                                      '170'=>'170°C',
                                                      '180'=>'180°C',
                                                      '190'=>'190°C',
                                                      '200'=>'200°C',
                                                      '210'=>'210°C',
                                                      '220'=>'220°C',
                                                      '230'=>'230°C',
                                                      '240'=>'240°C',
                                                      '250'=>'250°C'
                                                     )
                                    
     
                                    
     
 ));
 
?>
        </div>
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


    <script>


jQuery:

// add a row
jQuery.fn.addClone = function() {
var id = 11;
    return this.each(function() {

        // get row for cloningg
        var row = $(this).parents('tr');
        var parent = {};

        // use tbody or table parent
        if ( $(row).parents('tbody').length>0) {
            parent = $(row).parents('tbody');
        } else {
            parent = $(row).parents('table');
        }

        // inject clone
        var copy = $(row).clone();
        $(copy).addClass('sadey');
        $(copy).addClass('isclone');
        $(parent).append( copy );

        // remove last td and replace with remove html
        $('.sadey').children('td:last').remove();
        //$('.sadey').append('<td><img src="img/editdelete.png" onclick="$(this).killClone()"></td>');
        $('.sadey').append('<td><?php echo $this->Form->submit('del.gif',
                                                            array('onClick'=>"$(this).killClone();",
                                                                'type'=>'button',
                                                                'class'=>'clone'
                                                             )); ?>
                          </td>');
        // increment all ids and names
        
    
        var id = ($('.isclone').length +11);
        $('.sadey').find('*').each(function() {
            
         
            var tempId = $(this).attr('id');
           
            
        if (typeof tempId != 'undefined' && tempId!='') {
                $(this).attr('id',tempId +'_'+id);
                alert(tempId);
               
           }  
           
         
           // var tempName = $(this).attr("name");
            
           // if (typeof tempName != 'undefined' && tempName!='') {
            //    $(this).attr("name",tempName  + '_' +  id);
                 
            //}
           
        });


        // remove active tag
        $('.sadey').removeClass('sadey');
        
    });

};

// remove a row and re-index the clones
jQuery.fn.killClone = function() {

    var row = $(this).parents('tr');
    $(row).remove();

    // re-index
    var id = 2;
    $('.isclone').each(function() {
        $(this).find('*').each(function() {

            var tempId = $(this).attr('id');
            if (typeof tempId != 'undefined' && tempId!='') {
                tempId = tempId.split('_');
                $(this).attr('id',tempId[0]  + '_' +  id);
            }
            var tempName = $(this).attr('name');
            if (typeof tempName != 'undefined' && tempName!='') {
                tempName = tempName.split('_');
                $(this).attr('name',tempName[0]  + '_' +  id);
            }
        });
        id++;
     });
};



      
     

$('#datepicker').datetimepicker({
        dateFormat:false,
	timeFormat: 'HH:mm:ss',
	stepHour: 1,
	stepMinute: 1,
	stepSecond: 5
});








</script>
