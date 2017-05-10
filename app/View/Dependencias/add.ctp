<div class="dependencias form">
<?php echo $this->Form->create('Dependencia'); ?>
	<fieldset>
		<legend><?php echo __('Nueva Dependencia'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Dependencias'), array('action' => 'index')); ?></li>
	</ul>
</div>
