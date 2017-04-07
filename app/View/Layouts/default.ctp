<?php
/**
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

$cakeDescription = __d('cake_dev', 'Sistema de Gestion y Seguimiento de DISEO-UNERG');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style type="text/css">
		ul{
			list-style: none; 
			margin: 0; 
			padding: 0;
			

		}
		ul li{
			display: inline-block;

		}
		ul li a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
				<?php echo $this->Html->link($cakeDescription, 'http://localhost/comunicaciones/'); ?>
				
			</h1>
			<ul class="nav navbar-nav" style="display: block;">
		        <li><a href="<?php echo $this->webroot; ?>comunicaciones">Comunicaciones</a></li>
		        <li><a href="<?php echo $this->webroot; ?>directivos">Directivos</a></li>
		        <li><a href="<?php echo $this->webroot; ?>dependencias">Dependencias</a></li>
		        <li><a href="<?php echo $this->webroot; ?>users/logout">Salir</a></li>	
		        <!--<li><a href="<?php //echo $this->webroot; ?>roles">Roles</a></li>	 -->       
		      </ul>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://localhost/comunicaciones/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
