<h1 id='titredepage'>Bienvenu dans les Recettes </h1>

<div class="filters">
		<h3>Filters</h3>
		<?php
		// The base url is the url where we'll pass the filter parameters
		$base_url = array('controller' => 'NewsEntrees', 'action' => 'index');
		echo $this->Form->create("Filter",array('url' => $base_url, 'class' => 'filter'));
		// Add a basic search 
		echo $this->Form->input("search", array('label' => '', 'placeholder' => "Search...",'id'=>'search'));

		echo $this->Form->submit("Valider");

		
		echo $this->Form->end();
		?>
	</div>
 
<fieldset class="block">



<?php
foreach ($entrees as $e){
    if($e['NewsEntree']['id_list_plat']==1){
?>
        <h1 id='titre'>  
<?php

    }elseif ($e['NewsEntree']['id_list_plat']==2) {
        
        ?>
        
        <h1 id='titre2'>
        
<?php

    }elseif ($e['NewsEntree']['id_list_plat']==3) {
        
        ?>
              
                      
        <h1 id='titre3'>
    
        <?php
    }

        echo $this->Html->link($e['NewsEntree']['nom'],
            array('controller' => 'FichesEntrees', $e['NewsEntree']['id']));
?>    
        </h1>

<?php

#echo $this->Html->link($e['NewsEntree']['nom'],
 #           array('controller' => 'FichesEntrees', 'action' => 'view', $e['NewsEntree']['id']));

    
#echo "<h1 id='titre'><a href='http://erwanweb.no-ip.org/Appweb/cakeApp/FichesEntrees/index & id='".$e['NewsEntree']['id']."'>".$e['NewsEntree']['nom']."</a></h1>";

echo '<h2 id="commentaire">'.$e['NewsEntree']['commentaire'].'</h2>';

echo '<h2 id="nbr_perssonnes">'.$e['NewsEntree']['nbr_perssonnes'].'</h2>';

};


?>

</fieldset>

<?php




# create references to the images
  $nouvelle = $this->html->image('nouvelle.gif', array('alt' => '', 'title'=>'Nouvelle'));

 # use the images in CakePHP HTML links
  echo $this->Html->link($nouvelle, 
 array('controller' => 'NewsEntrees', 
'action' => 'add',
     'id'=>$e['NewsEntree']['id_list_plat']
 ),
 array('class' => 'icon_action','escape' => false));


   echo $this->Form->submit('scroll.gif',
                                          array('onClick'=>"$(this).ScrollToTop();",
                                                'type'=>'link',
                                                'title'=>'Vers le Haut',
                                                'class'=>'scrollup'
                                                             )); 
  
  
  
  
  
  
  
?>

<script type="text/javascript">
  ScrollToTop=function() {
  var s = $(window).scrollTop();
  if (s > 250) {
    $('.scrollup').fadeIn();
  } else {
    $('.scrollup').fadeOut();
  }
 
  $('.scrollup').click(function () {
      $("html, body").animate({ scrollTop: 0 }, 500);
      return false;
  });
}
 
StopAnimation=function() {
  $("html, body").bind("scroll mousedown DOMMouseScroll mousewheel keyup", function(){
    $('html, body').stop();
  });
}
 
 
$(window).scroll(function() {
  ScrollToTop();
  StopAnimation();
});
</script>');