

  

        <!--<div class="tab-content">-->
            <div class="tab-pane fade in active" id="home-pills">
                <div class="inner">
                		<div class="row">
										<div class="col-lg-12">
											<div class="panel panel-default">
												<div class="panel-heading">Editar Comunicacion</div>
												<div class="panel-body">
												<div class="row">
													<div class="col-lg-6">

														<?php echo $this->Form->create('Comunicacione'); ?>
														<?php $this->Form->input('id');?>
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
	
				</div>
            </div>
                                
        <!--</div>-->
    </div>








<!--<div class="comunicaciones form">
<?php //echo $this->Form->create('Comunicacione'); ?>
	<fieldset>
		<legend><?php// echo __('Editar Comunicacion '); ?></legend>
	<?php
		// $this->Form->input('id');?>

		<label><b>Numero Comunicacion</b></label>
		<?php //echo $this->Form->input('numero_comuni', array('label'=>false));?>

		<?php
		///echo $this->Form->input('dependencia_id');
		//echo $this->Form->input('directivo_id', array('type'=>'hidden'));
		//echo $this->Form->input('asunto');
		//echo $this->Form->input('fecha', array('dateFormat'=>'DMY'));
		//echo $this->Form->input('cuerpo');
		
		//echo $this->Form->input('copia_a');
		//echo $this->Form->input('Dependencia.Dependencia', array('multiple'=>true, 'label'=>false));

	?>
	<label>Enviar Copia A:</label>
	<?php //echo $this->Form->input('Dependencia.Dependencia', array('multiple'=>true, 'label'=>false));?>
	<label><b>Anexo</b></label>
			<?php// echo $this->Form->checkbox('anexo', array('label'=>'false'));?>
	</fieldset>
<?php //echo $this->Form->end(__('Editar')); ?>
</div>-->
<!--<div class="actions">
	<h3><?php //echo __('Acciones'); ?></h3>
	<ul>

		<li><?php //echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Comunicacione.id')), array(), __('Seguro desea Eliminar la Comunicacion #%s?', $this->Form->value('Comunicacione.numero_comuni'))); ?></li>
		<li><?php //echo $this->Html->link(__('Comunicaciones'), array('action' => 'index')); ?></li>
		
	</ul>
</div>-->
