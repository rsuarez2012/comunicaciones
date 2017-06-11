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
				<div class="panel-heading">Editar Beneficiario</div>
				<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
					<?php echo $this->Form->create('Beneficiario'); ?>
					<?php echo $this->Form->input('id');?>
	<fieldset>
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
						<div class="form-group">
							<label>Titular</label>
							<?php echo $this->Form->input('titulare_id',array('label' => false, 'class'=>'form-control'));?>
						</div>
						<?php echo $this->Form->button('Guardar', array('class'=>'btn btn-success'));?>
						<?php echo $this->Form->end(); ?>
		
	<?php
		/*echo $this->Form->input('id');
		echo $this->Form->input('cedula');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('nombres');
		echo $this->Form->input('fecha_nacimiento');
		echo $this->Form->input('parentesco');
		echo $this->Form->input('titulare_id');*/
	?>
	
<?php //echo $this->Form->end(__('Submit')); ?>
</div>

					</div>
				</div>
		</div>
	</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Beneficiario.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Beneficiario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Beneficiarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Titulares'), array('controller' => 'titulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Titulare'), array('controller' => 'titulares', 'action' => 'add')); ?> </li>
	</ul>
</div>
