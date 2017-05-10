<div class="directivos form">
<?php echo $this->Form->create('Directivo'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Directivo'); ?></legend>
	<?php
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('cedula');
		echo $this->Form->input('resolucion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Directivos'), array('action' => 'index')); ?></li>
	</ul>
</div>
