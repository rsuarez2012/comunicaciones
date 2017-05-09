<div class="dependencias view">
<h2><?php echo __('Dependencia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dependencia['Dependencia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($dependencia['Dependencia']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dependencia'), array('action' => 'edit', $dependencia['Dependencia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dependencia'), array('action' => 'delete', $dependencia['Dependencia']['id']), array(), __('Are you sure you want to delete # %s?', $dependencia['Dependencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependencia'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	
	<?php if(!empty($dependencia['Comunicacione'])==0){ ?>
		<?php echo ('No tiene comunicaciones enviadas, desea agregar');?>
		<?php echo $this->Html->link(__('Nueva Comunicacion?'), array('controller' => 'Comunicaciones', 'action'=>'add'));?>
		<?php }else{ ?>
		<div class="comunicaciones view">
			<h2><?php echo __('Comunicaciones'); ?></h2>
		</div>
			<table>
				<tr>
					<th><?php echo __('id'); ?></th>

					<th><?php echo __('Fecha'); ?></th>

					<th><?php echo __('Comunicacion'); ?></th>

					<th><?php echo __('Asunto'); ?></th>
					
					
					<th class="action"><?php echo __('Acciones');?></th>
				</tr>
				<?php foreach ($dependencia['Comunicacione'] as $beneficiario): ?>
				<tr>
					<td><?php echo $beneficiario['id'];?></td>

					<td><?php echo date("d-m-Y", strtotime($beneficiario['fecha'])); ?></td>

					<td><?php echo str_pad($beneficiario['numero_comuni'],3,'0',STR_PAD_LEFT); ?></td>

					<td><?php echo $beneficiario['asunto'];?></td>

										
					<td class="actions">
						<?php echo $this->Html->link(__('Ver'), array('controller' => 'Comunicaciones', 'action'=>'view', $beneficiario['id']));?>

						<?php echo $this->Html->link(__('Editar'), array('controller' => 'Comunicaciones', 'action'=>'edit', $beneficiario['id']));?>

						<?php echo $this->Html->link(__('Eliminar'), array('controller' => 'Comunicaciones', 'action'=>'delete', $beneficiario['id']),array(),__('Seguro de que desea Eliminar la Comunicacion: %s', $beneficiario['asunto']));?>



					</td>
				</tr>
				<?php endforeach;?>
				<?php echo $this->Html->link(__('Nueva Comunicacion'),array('controller' => 'Comunicaciones', 'action'=>'add'),array());?>
			</table>
		<?php } ?> 
	<?php //}endif; ?>
</div>