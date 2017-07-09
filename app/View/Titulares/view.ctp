<?php
  
    $parentesco = array(
          'MADRE' => 'MADRE',
          'PADRE' => 'PADRE',
          'HIJO' => 'HIJO',
          'HIJA' => 'HIJA',
          'CONYUGUE' => 'CONYUGUE',
          'OTRO' => 'OTRO');

?>
<div class="panel panel-info">
  <!-- Default panel contents -->
  <div class="panel-heading">
  	<h3><?php echo h($titulare['Titulare']['cedula'].' '.h($titulare['Titulare']['apellidos']).', '.h($titulare['Titulare']['nombres'])); ?></h3>
    <div class="actions" style="aling:center;" aling="center">
					
			<?php echo $this->Html->link(__('Editar Titular'), array('action' => 'edit', $titulare['Titulare']['id']),array('class'=>'btn btn-warning btn-xs')); ?>&nbsp;
			<?php echo $this->Form->postLink(__('Eliminar Titular'), array('action' => 'delete', $titulare['Titulare']['id']), array('class'=>'btn btn-danger btn-xs'), __('Seguro desea eliminar # %s?', $titulare['Titulare']['id'])); ?>
		</div>
  			
  </div>
</div>
  <div class="tab-content">

  	<table class="table">
  		<tr>
  			<th><?php echo __('Fecha Nacimiento'); ?></th> 
  			<th><?php echo __('Lugar Nacimiento'); ?></th>

  		</tr>
  		<tr>
  			<td><?php echo date("d-m-Y", strtotime(h($titulare['Titulare']['fecha_nacimiento']))); ?></td>
  			<td><?php echo h($titulare['Titulare']['lugar_nacimiento']); ?></td>

  		</tr>  		
  		<tr>
  			<th><?php echo __('Edad'); ?></th>
  			<th><?php echo __('Estado Civil'); ?></th>
  		</tr>
  		<tr>
  			<td><?php echo h($titulare['Titulare']['edad']); ?></td>
  			<td><?php echo h($titulare['Titulare']['estado_civil']); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo __('Direccion'); ?></th>
  			<th><?php echo __('Telefono'); ?></th>
  		</tr>
  		<tr>
  			<td><?php echo h($titulare['Titulare']['direccion']); ?></td>
  			<td><?php echo h($titulare['Titulare']['telefono']); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo __('Tipo Personal'); ?></th>
  			<th><?php echo __('Fecha Ingreso'); ?></th>
  		</tr>
  		<tr>
  			<td><?php echo h($titulare['Titulare']['tipo_personal']); ?></td>
  			<td><?php echo date("d-m-Y", strtotime(h($titulare['Titulare']['fecha_ingreso']))); ?></td>
      </tr>
    </table>
	<hr />
		<div class="panel panel-warning">
                        <div class="panel-heading">
                            <?php if(!empty($titulare['Beneficiario'])==0){ ?>
								              <?php echo ('No tiene carga Familiar, desea agregar');?>
                      						<div class="actions">

                      							<?php //echo $this->Html->link(__('Beneficiario?'), array('controller' => 'Beneficiarios', 'action'=>'add', $titulare['Titulare']['id']), array('class' => 'btn btn-success btn-xs','target' => '_blank'));?>
                                  
                                    <button type="button" id="nuevo" class="btn btn-success btn-xs">Agregar Beneficiario</button>
                                  </div>
                                  <?php }else{ ?>
                                    <div class="titulares view">
                                      <h4><?php echo __('Beneficiarios'); ?></h4>
                                    </div>
                                    <button type="button" id="nuevo" class="btn btn-success btn-xs">AGREGAR BENEFICIARIO</button> 
                      
                                  <button type="button" id="editar" class="btn btn-warning btn-xs">EDITAR</button>              
                                  <button type="button" id="eliminar" class="btn btn-danger btn-xs">ELIMINAR</button>              
                        </div>
                              
                                <div class="panel-body">
                                  <div class="table-responsive">
                                    <table id="example" width="100%">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Cedula</th>
                                          <th>Nombres</th>
                                          <th>Fecha Nacimiento</th>
                                          <th>Parentesco</th>
                                          <!--<th>Acciones</th>-->
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach ($titulare['Beneficiario'] as $beneficiario): ?>

                                        <tr>
                                          <td><?php echo $beneficiario['id'];?></td>
                                          <td><?php echo $beneficiario['cedula'];?></td>
                                          <td><?php echo $beneficiario['apellidos'].', '.$beneficiario['nombres'];?>
                                          </td>
                                          <td><?php echo date("d-m-Y", strtotime($beneficiario['fecha_nacimiento']));?></td>
                                          <td><?php echo $beneficiario['parentesco'];?></td>

                                        </tr>
                                      <?php endforeach;?>

                                      </tbody>
                                    </table>
                                  </div>
                                </div>                       
                              <?php } ?>
                              


                            <!--Formulario de agregar un nuevo Beneficiario-->
      <?php echo $this->Form->create('Beneficiario',['url'=>['controller'=>'Beneficiarios','action'=>'add']]);?>
      <div class="modal fade" id="modal-nuevo">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Nuevo Beneficiario</h4>
                  </div>

                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12">
                              <?php //echo $this->Form->create('Beneficiario',['controller'=>'beneficiarios', 'action'=>'add']); ?>
                  <?php //echo $this->Form->hidden('titulare_id',['name'=>'$titulare[Titulare][id]']);?>

                  <?php echo $this->Form->create('Beneficiario',['url'=>['controller'=>'beneficiarios', 'action'=>'add']]); ?>
                   <?php //echo $this->Form->input('titulare_id', array('type' => 'hidden','value' => $titulare_id));?>
        <input type="hidden" name="data[Beneficiario][titulare_id]" value="<?php echo $titulare['Titulare']['id']?>">
        
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
                    <?php //echo $this->Form->input('fecha_nacimiento', array('label'=>false, 'dateFormat'=>'DMY', 'minYear' => date('Y')-100, 'maxYear'=>date('Y')-0), array('label'=>false));?>
                    <?php echo $this->Form->date('fecha_nacimiento', array('label'=>false,'class'=>'form-control','type'=>'text', 'id'=>'dp2'));?>
                  </div>
                  <div class="form-group">
                    <label>Parentesco</label>
                    <?php echo $this->Form->input('parentesco',array('label' => false, 'class'=>'form-control', 'options'=>$parentesco));?>
                  </div>
        
                  
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success" id="new">Guardar</button>
                  </div>
              </div>
          </div>
      </div>
      <?php echo $this->Form->end();?>
      <!--Final del formulario de agregar Beneficiario-->
      
      <div class="modal fade" id="modal-editar" style="display:none">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Editar Beneficiario</h4>
                  </div>

                  <div class="modal-body">
                      <div class="row">
                        <div class="col-md-12">
                          <?php echo $this->Form->create('Beneficiario',['url'=>['controller'=>'beneficiarios', 'action'=>'edit']]); ?>
                            <?php echo $this->Form->hidden('id',array('id'=>'id'));?>

                  <?php //echo $this->Form->create('Beneficiario',['url'=>['controller'=>'beneficiarios', 'action'=>'add']]); ?>
                   <?php //echo $this->Form->input('titulare_id', array('type' => 'hidden','value' => $titulare_id));?>
        <div class="form-group">
              <label>Cedula</label>
              <?php echo $this->Form->input('cedula', array('cedula', 'label'=>false, 'class'=>'form-control', 'id'=>'cedula'));?>
            </div>
            <div class="form-group">
              <label>Apellidos</label>
              <?php echo $this->Form->input('apellidos', array('apellidos', 'label'=>false, 'class'=>'form-control', 'id'=>'apellidos'));?>
            </div>
            <div class="form-group">
              <label>Nombres</label>
              <?php echo $this->Form->input('nombres', array('nombres', 'label'=>false, 'class'=>'form-control', 'id'=>'nombres'));?>
            </div>
            <div class="form-group">
              <label>Fecha Nacimiento</label>
              <?php //echo $this->Form->input('fecha_nacimiento', array('label'=>false,'dateFormat'=>'DMY', 'minYear' => date('Y')-100, 'maxYear'=>date('Y')-0), array('id'=>'fecha'));?>
              
              <?php //echo $this->Form->date('fecha_nacimiento', array('label'=>false,'class'=>'form-control','type'=>'text', 'id'=>'dp1'));?>

              <?php echo $this->Form->date('fecha_nacimiento', array('label'=>false,'class'=>'form-control datepicker','type'=>'text', 'id'=>'datepicker'));?>
              <div>
                <?php //echo $this->Form->input('fecha_nacimiento', array('label'=>false,'class'=>'form-control','type'=>'text','autocomplete'=>false, 'id'=>'dp1', 'style'=>'none'));?>
                
                <!--<input class="datepicker" id="" type="text" name="">-->
                      
                

              </div>  
    

            </div>
            <div class="form-group">
              <label>Parentesco</label>
              <?php echo $this->Form->input('parentesco',array('label' => false, 'class'=>'form-control', 'id'=>'parentesco', 'options'=>$parentesco));?>
            </div>
            <div class="form-group">
              <!--<label>Titular</label>-->
              <?php echo $this->Form->input('titulare_id',array('label' => false, 'type'=>'hidden','class'=>'form-control','id'=>'titu'));?>
            </div>
        
                  
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success" id="new">Guardar</button>
                  </div>
              </div>
          </div>
      <?php echo $this->Form->end();?>

      </div>
<div id="resultado"></div>
<script type="text/javascript">

$('#example').DataTable();
$('#nuevo').click(function () {
    var $titulare_id = '<?php echo $titulare['Titulare']['id']?>';
     $('#modal-nuevo').modal('show');
});
    //console.log("Este es el id del titular "+$titulare_id)
    $('#new').submit(function() {
      // body...
    
      $.ajax({
        url: URL_BASE + 'beneficiarios/add/'+ $titulare_id, 
        type: 'POST',
        //data: $(this).serialize(),
        data: $(this).serialize(),
        success: function(data, $titulare_id){
                //$("#resultado").html(data);
                //$($(this).reload(true));
                //location.reload(true);            
                //$('#modal-nuevo').modal('show');
                //$('#resultado').html(data);
                location.reload(true);
                // body...
            }
      });  
      return false;
    });
 
var table = $('#example').DataTable();

$('#example').on('click', 'tr', function(){
  if($(this).hasClass('selected')){
    $(this).removeClass('selected');  
  }else{
    table.$('tr.selected').removeClass('selected');
    $(this).addClass('selected');   
  }

});
$('#editar').click(function() {
  var $titulare_id = '<?php echo $titulare['Titulare']['id']?>';
  var bene = $('#example tbody tr.selected td:first').text();
  if(id){
    $.ajax({
      url: URL_BASE  + 'beneficiarios/return_data',
      type: 'POST',
      dataType:'json',
      data:{id:bene},
      success: function(data){
        //console.log(data);
        
        $('#id').val(data[0].Beneficiario.id);
        $('#cedula').val(data[0].Beneficiario.cedula);
        $('#apellidos').val(data[0].Beneficiario.apellidos);
        $('#nombres').val(data[0].Beneficiario.nombres);
        $('#parentesco').val(data[0].Beneficiario.parentesco);
        $('#datepicker').val(data[0].Beneficiario.fecha_nacimiento);
        $('#titu').val(data[0].Beneficiario.titulare_id);

        $('#modal-editar').modal('show');

      }

    });
  }else{
      alert("Debe Seleccionar un Beneficiario");
   }
});
$('#eliminar').click(function(){
  var id = $('#example tbody tr.selected td:first').text();
  //alert('id');
  if(id){
    $.ajax({
      url: URL_BASE +'beneficiarios/eliminar/'+id,
      type: 'POST',
      dataType: 'json',
      data: {id: id},
      success: function(data){
        //Formulario(data);     
        alert(data);
        location.reload(true);
      }
    })
  }else{
    alert('Seleccione un registro');  
  }
});
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
    $('.datepicker').datepicker({
      language: "es",
      format: "yyyy-mm-dd",
      weekStart:0,
      todayHighlight: true,
      todayBtn:true,
      orientation: "bottom right",
     
    });
    ///datepicker para agregar un nuevo beneficiario
    $('#dp2').datepicker({
      format: "yyyy-mm-dd",
      language: "es",
      weekStart: 0,
      todayHighlight: true,
      todayBtn: true,
      //orientation: "bottom right",
      
    });
})
</script>