<div class="panel panel-info">
  <!-- Default panel contents -->
  <div class="panel-heading">
  	
  </div>

  	<table class="table">
  	
  	<tr>
  			
  		</tr>
  		<tr>
  		<th colspan="2" align="center"><?php echo __('Titular'); ?>-<?php echo h($titulare['Titulare']['cedula'].' '.h($titulare['Titulare']['apellidos']).', '.h($titulare['Titulare']['nombres'])); ?>
  			<div class="actions" style="display:in-block;">
					
						<?php echo $this->Html->link(__('Editar Titular'), array('action' => 'edit', $titulare['Titulare']['id'])); ?><?php echo $this->Form->postLink(__('Eliminar Titular'), array('action' => 'delete', $titulare['Titulare']['id']), array(), __('Seguro desea eliminar # %s?', $titulare['Titulare']['id'])); ?>
				</div>
  		</th>
  		<td>
  				
			</td>
  		</tr>
  		<tr>
  			<th><?php echo __('Fecha Nacimiento'); ?></th> 
  			<th><?php echo __('Lugar Nacimiento'); ?></th>

  		</tr>
  		<tr>
  			<td><?php echo h($titulare['Titulare']['fecha_nacimiento']); ?></td>
  			<td><?php echo h($titulare['Titulare']['lugar_nacimiento']); ?></td>

  		</tr>
  		
  		<tr>
  			<th><?php echo __('Edad'); ?></th>
  			<th><?php echo __('Estado Civil'); ?></th>
  		</tr>
  		<tr>
  			<td><?php echo h($titulare['Titulare']['edad']); ?></td>

  			<td><?php echo h($titulare['Titulare']['estado_civil']); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo __('Direccion'); ?></th>
  			<th><?php echo __('Telefono'); ?></th>
  		</tr>
  		<tr>
  			<td><?php echo h($titulare['Titulare']['direccion']); ?></td>

  			<td><?php echo h($titulare['Titulare']['telefono']); ?></td>

  		</tr>
  		<tr>
			<th><?php echo __('Tipo Personal'); ?></th>
			<th><?php echo __('Fecha Ingreso'); ?></th>
  		</tr>
  		<tr>
  			<td><?php echo h($titulare['Titulare']['tipo_personal']); ?></td>
  			<td><?php echo h($titulare['Titulare']['fecha_ingreso']); ?></td>

  		</tr>
  		

  	</table>
	
		


		<div class="related">
	
		<?php if(!empty($titulare['Beneficiario'])==0){ ?>
			<?php echo ('No tiene carga Familiar, desea agregar');?>
			<div class="actions">
			<?php echo $this->Html->link(__('Beneficiario?'), array('controller' => 'Beneficiarios', 'action'=>'add'));?></div>
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
					<div class="actions">
					<?php echo $this->Html->link(__('Agregar Beneficiario'), array('controller' => 'Beneficiarios', 'action'=>'add'));?></div>
				</table>
			<?php } ?> 
		<?php //}endif; ?>
	</div>
