<div class="titulares index">
	<h2><?php echo __('Titulares'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos, nombres'); ?></th>
			<th><?php //echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php //echo $this->Paginator->sort('fecha_nacimiento'); ?></th>
			<th><?php //echo $this->Paginator->sort('fecha_ingreso'); ?></th>
			<th><?php //echo $this->Paginator->sort('lugar_nacimiento'); ?></th>
			<th><?php //echo $this->Paginator->sort('edad'); ?></th>
			<th><?php //echo $this->Paginator->sort('estado_civil'); ?></th>
			<th><?php //echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php //echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_personal'); ?></th>
			<th><?php //echo $this->Paginator->sort('estatus'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($titulares as $titulare): ?>
	<tr>
		<td><?php echo h($titulare['Titulare']['id']); ?>&nbsp;</td>
		<td><?php echo h($titulare['Titulare']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($titulare['Titulare']['apellidos']). ' '.h($titulare['Titulare']['nombres']); ?>&nbsp;</td>
		<td><?php //echo h($titulare['Titulare']['nombres']); ?>&nbsp;</td>
		<td><?php //echo h($titulare['Titulare']['fecha_nacimiento']); ?>&nbsp;</td>
		<td><?php //echo h($titulare['Titulare']['fecha_ingreso']); ?>&nbsp;</td>
		<td><?php //echo h($titulare['Titulare']['lugar_nacimiento']); ?>&nbsp;</td>
		<td><?php //echo h($titulare['Titulare']['edad']); ?>&nbsp;</td>
		<td><?php //echo h($titulare['Titulare']['estado_civil']); ?>&nbsp;</td>
		<td><?php //echo h($titulare['Titulare']['direccion']); ?>&nbsp;</td>
		<td><?php //echo h($titulare['Titulare']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($titulare['Titulare']['tipo_personal']); ?>&nbsp;</td>
		<td><?php //echo h($titulare['Titulare']['estatus']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $titulare['Titulare']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $titulare['Titulare']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $titulare['Titulare']['id']), array(), __('Are you sure you want to delete # %s?', $titulare['Titulare']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
		<li><?php echo $this->Html->link(__('New Titulare'), array('action' => 'add')); ?></li>
	</ul>
</div>
