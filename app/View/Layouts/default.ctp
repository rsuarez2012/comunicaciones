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

$cakeDescription = __d('cake_dev', 'Sistema de Gestion y Seguimiento de DISESO-UNERG');
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

		echo $this->Html->css(array('cake.generic2', 'magic','login','bootstrap', 'main', 'theme', 'MoneAdmin','layout2', 'dataTables.bootstrap'));
		echo $this->Html->script(array('jquery','jquery-2.0.3.min', 'login','bootstrap', 'dataTables/dataTables.bootstrap', 'dataTables/jquery.dataTables'));

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
<body class="padTop53">
	<div id="wrap">
		<div id="top">
			<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
						<div class="navbar-header">
								<?php echo $this->Html->link($cakeDescription, 'http://localhost/comunicaciones/'); ?>
						</div>
							

							<?php //debug($user);?>
					</div>
			</nav>
		</div>

		<div id="left">
			<div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> Joe Romlin</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>
					<?php if(isset($user)):?>					
							<?php echo $this->element('menu'); ?>
						<?php endif; ?>
			
		</div>
		<!--<div id="container">-->
		<div id="content" style="width: 80%;">
			
						<?php echo $this->Session->flash(); ?>
						<?php echo $this->Session->flash('auth'); ?>
						
							
						<?php echo $this->fetch('content'); ?>
				
		</div>
	</div>

	
		<!--<div id="footer">
			<?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://localhost/comunicaciones/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);*/
			?>
			<p>
				<?php //echo $cakeVersion; ?>
			</p>
		</div>-->
	<!--</div>-->
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
