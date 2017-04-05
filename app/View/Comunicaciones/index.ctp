<div class="comunicaciones index">
	<h2><?php echo __('Comunicaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dependencia_id'); ?></th>
			<th><?php //echo $this->Paginator->sort('directivo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('asunto'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php //echo $this->Paginator->sort('cuerpo'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_comuni'); ?></th>
			<th><?php //echo $this->Paginator->sort('copia_a'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($comunicaciones as $comunicacione): ?>
	<tr>
		<td><?php echo h($comunicacione['Comunicacione']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comunicacione['Dependencia']['nombre'], array('controller' => 'dependencias', 'action' => 'view', $comunicacione['Dependencia']['id'])); ?>
		</td>
		<td>
			<?php //echo $this->Html->link($comunicacione['Directivo']['director'], array('controller' => 'directivos', 'action' => 'view', $comunicacione['Directivo']['id'])); ?>
		</td>
		<td><?php echo h($comunicacione['Comunicacione']['asunto']); ?>&nbsp;</td>
		<td><?php echo date("d-m-Y", strtotime(h($comunicacione['Comunicacione']['fecha']))); ?>&nbsp;</td>
		<td><?php //echo h($comunicacione['Comunicacione']['cuerpo']); ?>&nbsp;</td>
		<td><?php echo h($comunicacione['Comunicacione']['numero_comuni']); ?>&nbsp;</td>
		<td><?php //echo h($comunicacione['Comunicacione']['copia_a']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $comunicacione['Comunicacione']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $comunicacione['Comunicacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $comunicacione['Comunicacione']['id']), array(), __('Are you sure you want to delete # %s?', $comunicacione['Comunicacione']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registro de {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Comunicacione'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Dependencias'), array('controller' => 'dependencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Dependencia'), array('controller' => 'dependencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Directivos'), array('controller' => 'directivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Director'), array('controller' => 'directivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
