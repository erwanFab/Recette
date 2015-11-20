
<h1 id='titredepage'>Bienvenu dans la nouvelle Recettes </h1>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo $this->Html->script("jquery-1.11.3",array('inline'=>false));

echo $this->Html->script("ckeditor/ckeditor",array('inline'=>false));


echo $this->Form->create('NewsEntree');



switch ($plat) {
    case 1:$choix= 'Entree';
        
        break;
    case 2:$choix= 'Plat Principal';
        
        break;
    case 3:$choix= 'Dessert';
        
        break;
    default:$choix='Choix à valider';
        break;
}






echo $plat_choisi=$this->Form->input('id_list_plat', 
    array('label'=>'Choix du plats','options' => array(
                            '1'=>'Entrée',
                            '2'=>'Plat Principal',
                            '3'=>'Dessert'
                            ),
          'empty' => 'choisissez'
    )); 
;

       
/* Champ du premier formulaire  */

/* Titre de le Recette  */
echo $nom=$this->Form->input('nom',array('label'=>'Titre de la nouvelle Recette',
                                'type'=>'text',
                                'id'=>'nom'));
/* Commentaire  */

echo $commentaire =$this->Form->input('commentaire',array('label'=>'Un commentaire','type'=>'textarea','col'=>'490','rows'=>'150','id'=>'commentaire','class'=>'ckeditor'));

/* Nombre de Perssonnes */

echo $this->Form->label('Nombre de personnes:');
echo $nrb_perssonnes=$this->Form->number('nbr_perssonnes',array('label'=>'Nombre de Personnes','id'=>'nbr'));

/* boutton d'envoie de validation   */

echo $this->Form->end('valider');



foreach ($entrees as $e){
   # debug($e);
}


?>

<div id="suivant">
       
<?php

if(!empty($id_fiche)){
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
}
?>
   
</div>
    
    
    
    <script>



jQuery:




 function Show_Div(Div_id) {

            if (false == $(Div_id).is(':visible')) {

                $(Div_id).show(250);

            }

            else {

                $(Div_id).hide(250);

            }

        }
</script>
