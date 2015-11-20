

<script type="text/javascript">


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


    
   
    
    
});
</script>


