<div class="directivos index">
	<h2><?php echo __('Directivos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('c.i'); ?></th>
			<th><?php echo $this->Paginator->sort('resolucion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($directivos as $directivo): ?>
	<tr>
		<td><?php echo h($directivo['Directivo']['id']); ?>&nbsp;</td>
		<td><?php echo h($directivo['Directivo']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($directivo['Directivo']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($directivo['Directivo']['c.i']); ?>&nbsp;</td>
		<td><?php echo h($directivo['Directivo']['resolucion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $directivo['Directivo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $directivo['Directivo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $directivo['Directivo']['id']), array(), __('Are you sure you want to delete # %s?', $directivo['Directivo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Directivo'), array('action' => 'add')); ?></li>
	</ul>
</div>
