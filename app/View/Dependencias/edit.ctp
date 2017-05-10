<div class="dependencias form">
<?php echo $this->Form->create('Dependencia'); ?>
	<fieldset>
		<legend><?php echo __('Editar Dependencia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Dependencia.id')), array(), __('Seguro desea Eliminar esta Dependencia # %s?', $this->Form->value('Dependencia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Dependencias'), array('action' => 'index')); ?></li>
	</ul>
</div>
