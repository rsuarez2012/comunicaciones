<div class="titulares form">
<?php echo $this->Form->create('Titulare'); ?>
	<fieldset>
		<legend><?php echo __('Edit Titulare'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('nombres');
		echo $this->Form->input('cedula');
		echo $this->Form->input('fecha_nacimiento');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('lugar_nacimiento');
		echo $this->Form->input('edad');
		echo $this->Form->input('estado_civil');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('tipo_personal');
		echo $this->Form->input('estatus');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Titulare.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Titulare.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Titulares'), array('action' => 'index')); ?></li>
	</ul>
</div>
