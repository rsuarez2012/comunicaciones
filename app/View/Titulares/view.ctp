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
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="tab">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Cedula</th>
                                            <th>Nombres</th>
                                            <th>Fecha Nacimiento</th>
                                            <th>Parentesco</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php foreach ($titulare['Beneficiario'] as $beneficiario): ?>
	                                        <tr class="success">
	                                         
						
												<td><?php echo $beneficiario['id'];?></td>
												<td><?php echo $beneficiario['cedula'];?></td>
												<td><?php echo $beneficiario['apellidos'].', '.$beneficiario['nombres'];?></td>
												
												<td><?php echo date("d-m-Y", strtotime($beneficiario['fecha_nacimiento']));?></td>
												<td><?php echo $beneficiario['parentesco'];?></td>
												<td class="actions">
													<?php //echo $this->Html->link(__('Ver'), array('controller' => 'Beneficiarios', 'action'=>'view', $beneficiario['id']), array('class' => 'btn btn-info btn-xs'));?>
                                                    
													<?php echo $this->Html->link(__('Editar'), array('controller' => 'Beneficiarios', 'action'=>'edit', $beneficiario['id']), array('class' => 'btn btn-warning btn-xs','id'=>'edit'));?>

													<?php echo $this->Html->link(__('Eliminar'), array('controller' => 'Beneficiarios', 'action'=>'delete', $beneficiario['id']), array('class' => 'btn btn-danger btn-xs'),__('Seguro de que desea Eliminar el Beneficiario: %s', $beneficiario['apellidos']. ' '.$beneficiario['nombres']));?>
 
												</td>
											</tr>
											<?php endforeach;?>
											<tr>
												<div class="actions">

													<?php //echo $this->Html->link(__('Agregar Beneficiario'), array('controller' => 'Beneficiarios', 'action'=>'add', $titulare['Titulare']['id']), array('target'=>'_blank', 'class' => 'btn btn-success btn-xs'));?></div>
                            <button type="button" id="nuevo" class="btn btn-success btn-xs">Agregar Beneficiario</button> 
											
														<?php } ?> 
													<?php //}endif; ?>
                                                 
												</div>
											</tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

</div>

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
                    <?php echo $this->Form->input('fecha_nacimiento', array('label'=>false, 'dateFormat'=>'DMY', 'minYear' => date('Y')-100, 'maxYear'=>date('Y')-0), array('label'=>false));?>
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
<div id="resultado"></div>
<script type="text/javascript">
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
    

</script>