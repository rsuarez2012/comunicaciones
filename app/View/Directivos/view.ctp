<div class="directivos view">
<h2><?php echo __('Directivo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($directivo['Directivo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($directivo['Directivo']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($directivo['Directivo']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C.i'); ?></dt>
		<dd>
			<?php echo h($directivo['Directivo']['c.i']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resolucion'); ?></dt>
		<dd>
			<?php echo h($directivo['Directivo']['resolucion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Directivo'), array('action' => 'edit', $directivo['Directivo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Directivo'), array('action' => 'delete', $directivo['Directivo']['id']), array(), __('Are you sure you want to delete # %s?', $directivo['Directivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Directivos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directivo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
