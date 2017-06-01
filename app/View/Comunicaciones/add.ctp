<div class="inner">
	<div class="row">
		<!--<div class="col-lg-12">
			<h1 class="page-header"><?php //echo __('Nueva Comunicacion'); ?></h1>
		</div>-->
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Comunicacion Nueva</div>
				<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">

						<?php echo $this->Form->create('Comunicacione'); ?>
						<div class="form-group">
							<label>Numero Comunicacion</label>
							<?php echo $this->Form->input('numero_comuni', array('numero_comuni', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Dependencia</label>
							<?php echo $this->Form->input('dependencia_id', array('dependencia_id', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Asunto</label>
							<?php echo $this->Form->input('asunto', array('asunto', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Fecha</label>
							<?php echo $this->Form->input('fecha', array('fecha', 'dateFormat'=>'DMY', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Cuerpo</label>
							<?php echo $this->Form->input('cuerpo', array('cuerpo', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Director</label>
							<?php echo $this->Form->input('directivo_id', array('directivo_id', 'label'=>false, 'class'=>'form-control'));?>
						</div>
						<div class="form-group">
							<label>Enviar Copia A</label>
							<?php echo $this->Form->input('Dependencia.Dependencia', array('multiple'=>true, 'class'=>'form-control', 'label'=>false));?>
						</div>
						<div class="form-group">
							<label>Agregar Anexo</label>
							
								<?php echo $this->Form->checkbox('anexo', array('label'=>'false'));?>
							
						</div>
						<?php echo $this->Form->button('Guardar', array('class'=>'btn btn-success'));?>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
		</div>
	</div>
 
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Comunicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Dependencias'), array('controller' => 'dependencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Dependencia'), array('controller' => 'dependencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Directivos'), array('controller' => 'directivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Directivo'), array('controller' => 'directivos', 'action' => 'add')); ?> </li>
	</ul>
</div>