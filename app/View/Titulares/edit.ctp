<?php
		$perso = array(
					'ADMINISTRATIVO FIJO' => 'ADMINISTRATIVO FIJO',
					'ADMINISTRATIVO CONTRATADO' => 'ADMINISTRATIVO CONTRATADO',
					'ADMINISTRATIVO JUBILADO' => 'ADMINISTRATIVO JUBILADO',
					'DOCENTE ORDINARIO' => 'DOCENTE ORDINARIO',
					'DOCENTE CONTRATADO' => 'DOCENTE CONTRATADO',
					'DOCENTE JUBILADO' => 'DOCENTE JUBILADO',
					'OBRERO FIJO' => 'OBRERO FIJO',
					'OBRERO CONTRATADO'=>'OBRERO CONTRATADO',
					'OBRERO JUBILADO' => 'OBRERO JUBILADO',
					'SOBREVIVIENTE'=>'SOBREVIVIENTE');

		$estado = array(
						'Soltero(a)' => 'Soltero(a)',
						'Viudo(a)' => 'Viudo(a)',
						'Casado(a)' => 'Casado(a)');?>
<div class="inner">
	<div class="row">
		
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Titular</div>
				<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">

						<?php echo $this->Form->create('Titulare'); ?>
						<?php echo $this->Form->input('id');?>
						<div class="form-group">
							<label>Cedula</label>
							<?php echo $this->Form->input('cedula', array('cedula', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<?php echo $this->Form->input('apellidos', array('apellidos', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Nombres</label>
							<?php echo $this->Form->input('nombres', array('nombres', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Fecha Nacimiento</label>
							<?php echo $this->Form->input('fecha_nacimiento', array('label'=>false, 'dateFormat'=>'DMY', 'minYear' => date('Y')-100, 'maxYear'=>date('Y')-18), array('label'=>false));?>
						</div>
						<div class="form-group">
							<label>Lugar de Nacimiento</label>
							<?php echo $this->Form->input('lugar_nacimiento', array('lugar_nacimiento', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Estado Civil</label>
							<?php echo $this->Form->input('estado_civil', array('label'=>false, 'class'=>'form-control', 'options' => $estado));?>
						</div>
						<div class="form-group">
							<label>Telefono</label>
							<?php echo $this->Form->input('telefono', array('telefono', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Dirección</label>
							<?php echo $this->Form->input('direccion', array('direccion', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Tipo de Personal</label>
							<?php echo $this->Form->input('tipo_personal', array('options'=>$perso, 'multiple'=>true,'class'=>'form-control', 'label'=>false));?>
						</div>
						<div class="form-group">
							<label>Fecha de Ingreso</label>
							<?php echo $this->Form->input('fecha_ingreso', array('label'=>false, 'dateFormat'=>'DMY', 'minYear' => date('Y')-60, 'maxYear'=>date('Y')-0), array('label'=>false));?>
						</div>

						<?php echo $this->Form->button('Guardar', array('class'=>'btn btn-success'));?>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
		</div>
	</div>

<!--<div class="titulares form">
<?php //echo $this->Form->create('Titulare'); ?>
	<fieldset>
		<legend><?php //echo __('Editar Titular'); ?></legend>
	
	<?php
		/*$perso = array(
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
		echo $this->Form->input('fecha_nacimiento', array('dateFormat'=>'DMY', 'minYear' => date('Y')-100, 'maxYear'=>date('Y')-18));
		echo $this->Form->input('lugar_nacimiento');
		echo $this->Form->input('estado_civil', array('options' => $estado));
		echo $this->Form->input('edad');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');		
		echo $this->Form->input('fecha_ingreso',array('dateFormat'=>'DMY','minYear' => date('Y')-60, 'maxYear'=>date('Y')-0));

		echo $this->Form->input('tipo_personal',array('options'=>$perso));
		echo $this->Form->input('estatus');*/
	?>
	</fieldset>
<?php //echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Titulare.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Titulare.id'))); ?></li>
		<li><?php //echo $this->Html->link(__('List Titulares'), array('action' => 'index')); ?></li>
	</ul>
</div>-->