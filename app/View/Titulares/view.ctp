<div class="panel panel-info">
  <!-- Default panel contents -->
  <div class="panel-heading">
  	<?php echo __('Titular'); ?>-<?php echo h($titulare['Titulare']['cedula'].' '.h($titulare['Titulare']['apellidos']).', '.h($titulare['Titulare']['nombres'])); ?>
  </div>

  	<table class="table">
  	<tr>
  			<td rowspan="12" width="20%">
  				<div class="actions">
					<h3><?php echo __('Actions'); ?></h3>
					<ul>
						<li><?php echo $this->Html->link(__('Edit Titulare'), array('action' => 'edit', $titulare['Titulare']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Delete Titulare'), array('action' => 'delete', $titulare['Titulare']['id']), array(), __('Are you sure you want to delete # %s?', $titulare['Titulare']['id'])); ?> </li>
						<li><?php echo $this->Html->link(__('List Titulares'), array('action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('New Titulare'), array('action' => 'add')); ?> </li>
					</ul>
				</div>
			</td>
  		</tr>
  		<tr>
  			<th><?php echo __('Cedula'); ?></th><td><?php echo h($titulare['Titulare']['cedula']); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo __('Apellidos, Nombres '); ?></th><td><?php echo h($titulare['Titulare']['apellidos']).', '.h($titulare['Titulare']['nombres']); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo __('Fecha Nacimiento'); ?></th> <td><?php echo h($titulare['Titulare']['fecha_nacimiento']); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo __('Fecha Ingreso'); ?></th><td><?php echo h($titulare['Titulare']['fecha_ingreso']); ?></td>
			
  		</tr>
  		<tr>
  			<th><?php echo __('Lugar Nacimiento'); ?></th><td><?php echo h($titulare['Titulare']['lugar_nacimiento']); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo __('Edad'); ?></th><td><?php echo h($titulare['Titulare']['edad']); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo __('Estado Civil'); ?></th><td><?php echo h($titulare['Titulare']['estado_civil']); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo __('Direccion'); ?></th><td><?php echo h($titulare['Titulare']['direccion']); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo __('Telefono'); ?></th><td><?php echo h($titulare['Titulare']['telefono']); ?></td>
  		</tr>
  		<tr>
			<th><?php echo __('Tipo Personal'); ?></th><td><?php echo h($titulare['Titulare']['tipo_personal']); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo __('Estatus'); ?></th><td><?php echo h($titulare['Titulare']['estatus']); ?></td>
  		</tr>
  		

  	</table>
	
		


		<div class="related">
	
		<?php if(!empty($titulare['Beneficiario'])==0){ ?>
			<?php echo ('No tiene carga Familiar, desea agregar');?>
			<?php echo $this->Html->link(__('Beneficiario?'), array('controller' => 'Beneficiarios', 'action'=>'add'));?>
			<?php }else{ ?>
			<div class="titulares view">
				<h2><?php echo __('Beneficiarios'); ?></h2>
			</div>
				<table>
					<tr>
						<th><?php echo __('id'); ?></th>
						<th><?php echo __('Cedula'); ?></th>
						<th><?php echo __('Apellidos Nombres'); ?></th>
						<!--<th><?php //echo __('nombres'); ?></th>-->
						<th><?php echo __('Fecha Nacimiento'); ?></th>
						<th><?php echo __('Parentesco'); ?></th>
						<th class="action"><?php echo __('Acciones');?></th>
					</tr>
					<?php foreach ($titulare['Beneficiario'] as $beneficiario): ?>
					<tr>
						<td><?php echo $beneficiario['id'];?></td>
						<td><?php echo $beneficiario['cedula'];?></td>
						<td><?php echo $beneficiario['apellidos'].', '.$beneficiario['nombres'];?></td>
						
						<td><?php echo $beneficiario['fecha_nacimiento'];?></td>
						<td><?php echo $beneficiario['parentesco'];?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('Ver'), array('controller' => 'Beneficiarios', 'action'=>'view', $beneficiario['id']));?>

							<?php echo $this->Html->link(__('Editar'), array('controller' => 'Beneficiarios', 'action'=>'edit', $beneficiario['id']));?>

							<?php echo $this->Html->link(__('Eliminar'), array('controller' => 'Beneficiarios', 'action'=>'delete', $beneficiario['id']),array(),__('Seguro de que desea Eliminar el Beneficiario: %s', $beneficiario['apellidos']. ' '.$beneficiario['nombres']));?>



						</td>
					</tr>
					<?php endforeach;?>
					<?php echo $this->Html->link(__('Agregar Beneficiario'), array('controller' => 'Beneficiarios', 'action'=>'add'));?>
				</table>
			<?php } ?> 
		<?php //}endif; ?>
	</div>
