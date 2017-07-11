

  

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
															<?php echo $this->Form->date('fecha', array('fecha', 'label'=>false, 'class'=>'form-control', 'id'=>'fecha'));?>
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
<script type="text/javascript">
 $(function($){
  
    $.fn.datepicker.dates['es'] = {
        days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
        daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
        daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
        months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        today: "Hoy"
    };
    $('#fecha').datepicker({
      language: "es",
      format: "yyyy-mm-dd",
      weekStart:0,
      todayHighlight: true,
      todayBtn:true,
      orientation: "bottom right",
     
    });
});
 </script>