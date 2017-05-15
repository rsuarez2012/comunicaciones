<div class="titulares form">
<?php echo $this->Form->create('Titulare'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Titular'); ?></legend>
	<?php
		$perso = array(
					'ADMINISTRATIVO FIJO' => 'ADMINISTRATIVO FIJO',
					'ADMINISTRATIVO CONTRATADO' => 'ADMINISTRATIVO CONTRATADO',
					'DOCENTE FIJO' => 'DOCENTE FIJO',
					'DOCENTE CONTRATADO' => 'DOCENTE CONTRATADO',
					'OBRERO FIJO' => 'OBRERO FIJO',
					'OBRERO CONTRATADO'=>'OBRERO CONTRATADO',
					'JUBILADO' => 'JUBILADO',
					'SOBREVIVIENTE'=>'SOBREVIVIENTE');

		$estado = array(
						'Soltero(a)' => 'Soltero(a)',
						'Viudo(a)' => 'Viudo(a)',
						'Casado(a)' => 'Casado(a)',
		);
		echo $this->Form->input('cedula');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('nombres');
		echo $this->Form->input('fecha_nacimiento', array('dateFormat'=>'DMY'));
		echo $this->Form->input('lugar_nacimiento');
		echo $this->Form->input('estado_civil', array('options' => $estado));
		echo $this->Form->input('edad');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');		
		echo $this->Form->input('fecha_ingreso',array('dateFormat'=>'DMY'));

		echo $this->Form->input('tipo_personal',array('options'=>$perso));
		echo $this->Form->input('estatus');
	?>
	</fieldset>
<?php echo $this->Form->end(__('GUARDAR')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Titulares'), array('action' => 'index')); ?></li>
	</ul>
</div>
