<div class="directivos form">
<?php echo $this->Form->create('Directivo'); ?>
	<fieldset>
		<legend><?php echo __('Editar Directivo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('cedula');
		echo $this->Form->input('resolucion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Directivo.id')), array(), __('Seguro desea Eliminar # %s?', $this->Form->value('Directivo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Directivos'), array('action' => 'index')); ?></li>
	</ul>
</div>
