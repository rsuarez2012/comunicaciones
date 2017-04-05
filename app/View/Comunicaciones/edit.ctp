<div class="comunicaciones form">
<?php echo $this->Form->create('Comunicacione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Comunicacione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dependencia_id');
		echo $this->Form->input('directivo_id');
		echo $this->Form->input('asunto');
		echo $this->Form->input('fecha');
		echo $this->Form->input('cuerpo');
		echo $this->Form->input('numero_comuni');
		echo $this->Form->input('copia_a');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Comunicacione.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Comunicacione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dependencias'), array('controller' => 'dependencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependencia'), array('controller' => 'dependencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Directivos'), array('controller' => 'directivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directivo'), array('controller' => 'directivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
