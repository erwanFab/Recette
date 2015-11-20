<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo $this->Html->script("jquery-1.11.3",array('inline'=>false));
echo $this->Html->script("jquery-ui",array('inline'=>false));
echo $this->Html->script("jquery-timepicker",array('inline'=>false));
echo $this->Html->script("ckeditor/ckeditor",array('inline'=>false));

echo $this->Form->create('FichesEntree');
?>
<div>
    <?php
   
    ?>
    <section>
 <table>
     <caption>
                    Choix des ingrédients pour la recette
                </caption>
    <tr>
        
        <td><?php echo $quantite= $this->Form->number('quantite',array('id'=>'quantite','class'=>'quantite'));?></td>
        
        <td><?php echo $unity=$this->Form->input('id_unity',array('options'=>$unitys,'id'=>'id_unity','empty'=>'choisissez')); ?></td>
        <td><?php echo $ingred=$this->Form->input('id_ingredients',array('options'=>$ingredients,'id'=>'id_ingredients','empty'=>'choisissez')); ?></td>
        
        <td><?php 
        
        
        
        echo $button=$this->Form->submit('edit_add.png',
                                                            array('onClick'=>"$(this).addClone();",
                                                                'type'=>'button',
                                                                'class'=>'clone'
                                                             )); ?>
        </td>
          <td><?php echo $this->Form->submit('suppr.jpeg',
                                                            array('onClick'=>"$(this).killClone();",
                                                                'type'=>'button',
                                                                'class'=>'clone'
                                                             )); ?>
       </td>    
    </tr>
</table>   
           
 </section>               

      
    <div id="add_remove_btns">
        
      <?php
 echo $this->Form->label('Les étapes :');
 echo $this->Form->textarea('Les Etapes',array('col'=>'100','rows'=>'20','class'=>'ckeditor'));

 ?>

 
 <?php
  echo '</br>';
   echo '</br>';
 echo $this->Form->label('Le Temps de cuisson :');
 echo '</br>';
 echo $this->Form->input('time',array(
                                        'type'=>'text',
                                        'id'=>'datepicker',
                                        
                                        'class'=>'timepicker'
                                            
                                        
 ));
 

 
 echo $this->Form->input('thermos',array('type'=>'select',
                                            'id'=>'thermos',
                                            'options' => array(
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
                                                     ),
                                    'emtpy'=>'selectinnez un thermostat'
     
                                    
     
 ));
 
 echo $this->Form->end('Valider une Recette',array('controller'=>'CreationsEntrees','action'=>'add')); 

?>
    </div>
</div>
    <script>


jQuery:

// add a row
jQuery.fn.addClone = function() {

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
        $('.sadey').append('<td><?php echo $this->Form->submit('suppr.jpeg',
                                                            array('onClick'=>"$(this).killClone();",
                                                                'type'=>'button',
                                                                'class'=>'clone'
                                                             )); ?>
                          </td>');
        // increment all ids and names
        var id = ($('.isclone').length + 1);
        $('.sadey').find('*').each(function() {
            var tempId = $(this).attr('id');
            if (typeof tempId != 'undefined' && tempId!='') {
                $(this).attr('id',tempId  + '_' +  id);
            }
            var tempName = $(this).attr('name');
            if (typeof tempName != 'undefined' && tempName!='') {
                $(this).attr('name',tempName + '_' + id);
            }
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

var regex = /^(.*)(\d)+$/i;
var cloneIndex = $(".master").length;


function clone(){
    $(this).parents(".master").clone()
        .appendTo("tbody")
        .attr("id", "master" +  cloneIndex)
        .find("*")
        .each(function() {
            var id = this.id || "";
            var match = id.match(regex) || [];
            if (match.length == 3) {
                this.id = match[1] + (cloneIndex);
            }
         
        })
        .on('click', 'button.clone', clone)
        .on('click', 'button.remove', remove);
    cloneIndex++;
    
    



  
}
function remove(){
    $(this).parents(".master").remove();
}
$("button.clone").on("click", clone);

$("button.remove").on("click", remove);






</script>

