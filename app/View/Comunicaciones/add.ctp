<div class="comunicaciones form">
<?php echo $this->Form->create('Comunicacione'); ?>
	<fieldset>
		<legend><?php echo __('Nueva Comunicacion'); ?></legend>
	<?php
		echo $this->Form->input('numero_comuni');
		echo $this->Form->input('dependencia_id');
		
		echo $this->Form->input('asunto');
		echo $this->Form->input('fecha', array('dateFormat'=>'DMY'));
		echo $this->Form->input('cuerpo');
		echo $this->Form->input('directivo_id');
		echo $this->Form->input('copia_a');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dependencias'), array('controller' => 'dependencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependencia'), array('controller' => 'dependencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Directivos'), array('controller' => 'directivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directivo'), array('controller' => 'directivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
