<div class="directivos form">
<?php echo $this->Form->create('Directivo'); ?>
	<fieldset>
		<legend><?php echo __('Add Directivo'); ?></legend>
	<?php
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('cedula');
		echo $this->Form->input('resolucion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Directivos'), array('action' => 'index')); ?></li>
	</ul>
</div>
