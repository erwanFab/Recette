<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

                echo $this->Html->css('menu');
		echo $this->Html->css('cake.generic');
                echo $this->Html->css('recette');
                echo $this->Html->css('Entree');
                echo $this->Html->css('new_activation');
                echo $this->Html->css('Fiche');
              
                echo $this->Html->css('jquery-ui');
                echo $this->Html->css('timepicker');
                echo $this->Html->css('User');
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                
               
                
	?>
    
    <?php echo $this->Html->script('jquery-1.11.3');?>
    
 
    
    
   
    
</head>
<body>
    
  
    
	<div id="container">
            <div id="header">
		<div id="Session">	
		<?php 
                $user= $this->Session->read();
                
          #  if($user['Auth']['User']['username']!=''){
              if(!empty($user['Auth']['User']['username'])){  
                ?>
                    <div id="SessionOn">
                     
                    <?php  
                     echo $user['Auth']['User']['username'].'</br>';   
                     echo $this->Html->link('se deconnecter', 
                                        array('controller' => 'Users', 
                                              'action' => 'logout' ),
                                        array('class' => 'icon_action',
                                              'escape' => false));
                 
                
                ?>
                    </div>
                    <?php
                     
                 }else{
                     ?>
                
            <div id="SessionOff">
                     
                    <?php 
                       
                      echo $this->Html->link('se connecter', 
                                        array('controller' => 'Users', 
                                              'action' => 'login' ),
                                        array('class' => 'icon_action',
                                              'escape' => false));
                 }
                    ?>
                    </div>
                 
               
                    
                 
                 
  
                
  
                </div>
                        <div class="menu">                   
                            <ul id="menu-demo2">
                                <li><?php echo $this->Html->link('Accueil',array('controller'=>'Acceuil',
                                                                                          'action'=>'index'
                                                                                           ));?>
                                </li>
                                    <li><?php echo $this->Html->link('Les entrées',array('controller'=>'NewsEntrees',
                                                                                          'action'=>'index',
                                                                                           'id'=>'1'));?>
                                        <!--
                                            <ul>
                                                    <li><a href="#">lien sous menu 1</a></li>
                                                    <li><a href="#">lien sous menu 1</a></li>
                                                    <li><a href="#">lien sous menu 1</a></li>
                                                    <li><a href="#">lien sous menu 1</a></li>
                                            </ul>
                                        --->
                                    </li>
                                    <li><?php echo $this->Html->link('Les plats principaux',array('controller'=>'NewsEntrees',
                                                                                          'action'=>'index',
                                                                                           'id'=>'2'));?>
                                        <!--
                                            <ul>
                                                    <li><a href="#">Lien sous menu 2</a></li>
                                                    <li><a href="#">Lien sous menu 2</a></li>
                                                    <li><a href="#">Lien sous menu 2</a></li>
                                                    <li><a href="#">Lien sous menu 2</a></li>
                                            </ul>
                                        -->
                                    </li>
                                    <li><?php echo $this->Html->link('Les desserts',array('controller'=>'NewsEntrees',
                                                                                          'action'=>'index',
                                                                                           'id'=>'3'));?>
                                        <!--
                                            <ul>
                                                    <li><a href="#">lien sous menu 3</a></li>
                                                    <li><a href="#">lien sous menu 3</a></li>
                                                    <li><a href="#">lien sous menu 3</a></li>
                                                    <li><a href="#">lien sous menu 3</a></li>
                                            </ul>
                                        -->
                                    </li>
                                    <li><?php echo $this->Html->link('Administrer',array('controller'=>'Users','action'=>'index'));?>
                                           
                                        
                                            <ul>
                                                    <li><?php echo $this->Html->link('User',array('controller'=>'Users','action'=>'index'));?></li>
                                                    <li><?php echo $this->Html->link('Add Ingrédients',array('controller'=>'Ingredients','action'=>'add'));?></li>
                                                   <!-- <li><a href="#">Lien sous menu 4</a></li>
                                                    <li><a href="#">Lien sous menu 4</a></li> -->
                                            </ul>
                                        
                                    </li>
                            </ul>
                        </div>        
                
            </div>
		<div id="content">

			<?php #echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
                     
		</div>
		<div id="footer">
			<?php #echo $this->Html->link(
				#	$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				#	'http://www.cakephp.org/',
				#	array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				#);
			?>
			<p>
				<?php #echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php #echo $this->element('sql_dump'); ?>
</body>
</html>
