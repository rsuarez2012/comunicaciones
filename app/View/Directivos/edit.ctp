<div class="directivos form">
<?php echo $this->Form->create('Directivo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Directivo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('c.i');
		echo $this->Form->input('resolucion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Directivo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Directivo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Directivos'), array('action' => 'index')); ?></li>
	</ul>
</div>
