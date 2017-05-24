<div class="beneficiarios form">
<?php echo $this->Form->create('Beneficiario'); ?>
	<fieldset>
		<legend><?php echo __('Add Beneficiario'); ?></legend>
	<?php
		echo $this->Form->input('cedula');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('nombres');
		echo $this->Form->input('fecha_nacimiento');
		echo $this->Form->input('parentesco');
		echo $this->Form->input('titulare_id', array('value' => $titulares['Titulare']['id']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Beneficiarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Titulares'), array('controller' => 'titulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Titulare'), array('controller' => 'titulares', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php echo pr($titulare);?>