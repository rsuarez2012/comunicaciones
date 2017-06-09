<div class="beneficiarios form">
<?php echo $this->Form->create('Beneficiario'); ?>
<?php echo $this->Form->input('titulare_id', array('type' => 'hidden','value' => $titulare_id));?>
	<fieldset>
		<legend><?php echo __('Add Beneficiario'); ?></legend>

	<?php
		$parentesco = array(
					'MADRE' => 'MADRE',
					'PADRE' => 'PADRE',
					'HIJO' => 'HIJO',
					'HIJA' => 'HIJA',
					'CONYUGUE' => 'CONYUGUE',
					'OTRO' => 'OTRO');

		echo $this->Form->input('cedula');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('nombres');
		echo $this->Form->input('fecha_nacimiento',array('dateFormat'=>'DMY','minYear' => date('Y')-100, 'maxYear'=>date('Y')-0));
		echo $this->Form->input('parentesco',array('options'=>$parentesco));
		//echo $this->Form->input('titulare_id');
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
<?php //echo pr($titulare);?>