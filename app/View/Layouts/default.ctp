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

		echo $this->Html->css(array('cake.generic', 'sweetalert2.min','sweetalert2','bootstrap.min2'));
		echo $this->Html->script(array('jquery','sweetalert2', 'sweetalert2.min','bootstrap.min2'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery("#messages").click(function() {
				swal("Texto del mensaje", 'success');
			});
		jQuery("#messages").click(function() {	
			swal({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then(function () {
				$('#messages').html(modulo + ' - Retirar Alumno');
    			$("#messages").load("<?php  echo $this->webroot; ?>/titulares/delete/"+id);
			  swal(
			    'Deleted!',
			    'Your file has been deleted.',
			    'success'
			  )
			})

			});
		});
	</script>
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
<?php //if(isset($current_user)): ?>
						<?php //endif; ?>

	<div id="container">
		<div id="header">
			<h1>
				
			</h1>
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
					<?php echo $this->Html->link($cakeDescription, 'http://localhost/comunicaciones/'); ?>
						
					</div>
						<?php if(isset($user)):?>					
							<?php echo $this->element('menu'); ?>
						<?php endif; ?>

						<?php //debug($user);?>
						
					
				</div>
			</nav>
			
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://localhost/comunicaciones/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);*/
			?>
			<p>
				<?php //echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
