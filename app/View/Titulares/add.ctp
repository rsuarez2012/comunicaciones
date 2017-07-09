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
							<?php //echo $this->Form->input('fecha_nacimiento', array('label'=>false, 'dateFormat'=>'DMY', 'minYear' => date('Y')-100, 'maxYear'=>date('Y')-18), array('label'=>false));?>
							<?php echo $this->Form->date('fecha_nacimiento', array('label'=>false,'class'=>'form-control nacio','type'=>'text','autocomplete'=>'off'));?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->input('edad', array('class'=>'form-control', 'id'=>'fecha'));?>
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
							<?php echo $this->Form->input('tipo_personal', array('options'=>$perso, 'class'=>'form-control', 'label'=>false));?>

						</div>
						<div class="form-group">
							<label>Fecha de Ingreso</label>
							<?php //echo $this->Form->input('fecha_ingreso', array('label'=>false, 'dateFormat'=>'DMY', 'minYear' => date('Y')-60, 'maxYear'=>date('Y')-0), array('label'=>false));?>
							<?php echo $this->Form->date('fecha_ingreso', array('label'=>false,'class'=>'form-control','type'=>'text', 'id'=>'ingreso','autocomplete'=>'off'));?>
						</div>

						<?php echo $this->Form->button('Guardar', array('class'=>'btn btn-success'));?>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
		</div>
	</div>
<script type="text/javascript">
	   //datepicker para editar el beneficiario
$(function($){
  
    $.fn.datepicker.dates['es'] = {
        days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
        daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
        daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
        months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        today: "Hoy"
    };
    $('.nacio').datepicker({
      language: "es",
      format: "yyyy-mm-dd",
      weekStart:0,
      todayHighlight: true,
      todayBtn:true,
      orientation: "bottom right",
     
    });
    ///datepicker para agregar un nuevo beneficiario
    $('#ingreso').datepicker({
      format: "yyyy-mm-dd",
      language: "es",
      weekStart: 0,
      todayHighlight: true,
      todayBtn: true,
      //orientation: "bottom right",
      
    });
});
$('#fecha').click(function() {
	// body...
	// 
	var f = $('.nacio').val();
	var hoy = new Date();
    var cumpleanos = new Date(f);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();

    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }

     //alert(edad);
     $('#fecha').val(edad);
	//alert(f);
	
})
</script>