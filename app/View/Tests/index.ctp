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

 
?>
 <br />

    <input type="button" value="Click me to show or hidden div" onclick="Show_Div(Div_1)" />

    <br />

    <br />

    <div id="Div_1" style="display: none; background-color: #ffffdd; width: 300px;">

       
<?php

# create references to the images
  $save = $this->html->image('suivant.gif', array('alt' => '', 'title'=>'suivant'));

 # use the images in CakePHP HTML links
  echo $this->Html->link($save, 
 array('controller' => 'FichesEntrees', 
'action' => 'add',
     'id_list_plat'=>$e['NewsEntree']['id_list_plat'],
     'id_fiche'=>$id_fiche
 ),
 array('class' => 'icon_action','escape' => false));

?>
    </div>
    
    <div id="phone_number_form" class="hidden">
    <p>
        Phone number : <input type="text" name="phone_number"> 
        <input type="button" id="remove_phone_number" value="Remove">
    </p>
</div>
<form>
    <p>
        <input type="button" value="Add phone number" id="add_phone_number">
    </p>
</form>
    
    
    <script>



jQuery:

// add a row
jQuery.fn.addClone = function() {
    
var id=10;
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
        
    
        var id = ($('.isclone').length + 11);
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





 function Show_Div(Div_id) {

            if (false == $(Div_id).is(':visible')) {

                $(Div_id).show(250);

            }

            else {

                $(Div_id).hide(250);

            }

        }
        
          $(document).ready(function(){
        //We will be using an unique index number for each new instance of the cloned form
        var phone_number_form_index=0;
        //When the button is clicked (or Enter is pressed while it's selected)
        $("#add_phone_number").click(function(){
            //Increment the unique index cause we are creating a new instance of the form
            phone_number_form_index++;
            //Clone the form and place it just before the button's <p>. Also give its id a unique index
            $(this).parent().before($("#phone_number_form").clone().attr("id","phone_number_form" + phone_number_form_index));
            //Make the clone visible by changing CSS
            $("#phone_number_form" + phone_number_form_index).css("display","inline");
            //For each input fields contained in the cloned form...
            $("#phone_number_form" + phone_number_form_index + " :input").each(function(){
                //Modify the name attribute by adding the index number at the end of it
                $(this).attr("name",$(this).attr("name") + phone_number_form_index);
                //Modify the id attribute by adding the index number at the end of it
                $(this).attr("id",$(this).attr("id") + phone_number_form_index);
            });
            //When the Remove button is clicked (or Enter is pressed while it's selected)
            $("#remove_phone_number" + phone_number_form_index).click(function(){
                //Remove the whole cloned div
                $(this).closest("div").remove();
            });
        }); 
    });
        
        
        
</script>
