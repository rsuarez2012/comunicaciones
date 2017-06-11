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
						'Casado(a)' => 'Casado(a)');

		$parentesco = array(
					'MADRE' => 'MADRE',
					'PADRE' => 'PADRE',
					'HIJO' => 'HIJO',
					'HIJA' => 'HIJA',
					'CONYUGUE' => 'CONYUGUE',
					'OTRO' => 'OTRO');

?>

<div class="inner">
	<div class="row">
		
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo Beneficiario</div>
				<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">

						<?php echo $this->Form->create('Beneficiario'); ?>
						<?php echo $this->Form->input('titulare_id', array('type' => 'hidden','value' => $titulare_id));?>
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
							<?php echo $this->Form->input('fecha_nacimiento', array('label'=>false, 'dateFormat'=>'DMY', 'minYear' => date('Y')-100, 'maxYear'=>date('Y')-0), array('label'=>false));?>
						</div>
						<div class="form-group">
							<label>Parentesco</label>
							<?php echo $this->Form->input('parentesco',array('label' => false, 'class'=>'form-control', 'options'=>$parentesco));?>
						</div>
						<?php echo $this->Form->button('Guardar', array('class'=>'btn btn-success'));?>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
		</div>
	</div>




<?php //echo pr($titulare);?>