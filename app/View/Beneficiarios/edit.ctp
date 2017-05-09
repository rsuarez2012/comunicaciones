<div class="beneficiarios form">
<?php echo $this->Form->create('Beneficiario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Beneficiario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cedula');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('nombres');
		echo $this->Form->input('fecha_nacimiento');
		echo $this->Form->input('parentesco');
		echo $this->Form->input('titulare_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Beneficiario.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Beneficiario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Beneficiarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Titulares'), array('controller' => 'titulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Titulare'), array('controller' => 'titulares', 'action' => 'add')); ?> </li>
	</ul>
</div>