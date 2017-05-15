<div class="beneficiarios index">
	<h2><?php echo __('Beneficiarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('parentesco'); ?></th>
			<th><?php echo $this->Paginator->sort('titulare_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($beneficiarios as $beneficiario): ?>
	<tr>
		<td><?php echo h($beneficiario['Beneficiario']['id']); ?>&nbsp;</td>
		<td><?php echo h($beneficiario['Beneficiario']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($beneficiario['Beneficiario']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($beneficiario['Beneficiario']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($beneficiario['Beneficiario']['fecha_nacimiento']); ?>&nbsp;</td>
		<td><?php echo h($beneficiario['Beneficiario']['parentesco']); ?>&nbsp;</td>
		<td><?php //echo h($beneficiario['Beneficiario']['titulare_id']); ?>
		<?php echo h($beneficiario['Titulare']['apellidos']);?>
		&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $beneficiario['Beneficiario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $beneficiario['Beneficiario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $beneficiario['Beneficiario']['id']), array(), __('Are you sure you want to delete # %s?', $beneficiario['Beneficiario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Beneficiario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Titulares'), array('controller' => 'titulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Titulare'), array('controller' => 'titulares', 'action' => 'add')); ?> </li>
	</ul>
</div>
