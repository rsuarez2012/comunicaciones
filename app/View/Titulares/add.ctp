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
				<div class="panel-heading">Nuevo Titular</div>
				<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">

						<?php echo $this->Form->create('Titulare'); ?>
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
							<?php echo $this->Form->input('edad', array('class'=>'form-control'));?>
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
							<!--<label>Tipo de Personal</label>-->
							<?php echo $this->Form->input('tipo_personal', array('options'=>$perso,'class'=>'form-control'));?>
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
