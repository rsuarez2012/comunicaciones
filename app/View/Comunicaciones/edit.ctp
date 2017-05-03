<div class="comunicaciones form">
<?php echo $this->Form->create('Comunicacione'); ?>
	<fieldset>
		<legend><?php echo __('Editar Comunicacion '); ?></legend>
	<?php
		echo $this->Form->input('id');?>

		<label><b>Numero Comunicacion</b></label>
		<?php echo $this->Form->input('numero_comuni', array('label'=>false));?>

		<?php
		echo $this->Form->input('dependencia_id');
		echo $this->Form->input('directivo_id', array('type'=>'hidden'));
		echo $this->Form->input('asunto');
		echo $this->Form->input('fecha', array('dateFormat'=>'DMY'));
		echo $this->Form->input('cuerpo');
		
		//echo $this->Form->input('copia_a');
		//echo $this->Form->input('Dependencia.Dependencia', array('multiple'=>true, 'label'=>false));

	?>
	<label>Enviar Copia A:</label>
	<?php echo $this->Form->input('Dependencia.Dependencia', array('multiple'=>true, 'label'=>false));?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Comunicacione.id')), array(), __('Seguro desea Eliminar la Comunicacion #%s?', $this->Form->value('Comunicacione.numero_comuni'))); ?></li>
		<li><?php echo $this->Html->link(__('Comunicaciones'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
