<div class="panel panel-info">
  <!-- Default panel contents -->
  <div class="panel-heading">
  	<?php echo h($titulare['Titulare']['cedula'].' '.h($titulare['Titulare']['apellidos']).', '.h($titulare['Titulare']['nombres'])); ?>
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

								<?php echo $this->Html->link(__('Beneficiario?'), array('controller' => 'Beneficiarios', 'action'=>'add', $titulare['Titulare']['id']), array('class' => 'btn btn-success btn-xs','target' => '_blank'));?></div>

								<?php }else{ ?>
								<div class="titulares view">
								<h4><?php echo __('Beneficiarios'); ?></h4>
							</div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
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

													<?php echo $this->Html->link(__('Editar'), array('controller' => 'Beneficiarios', 'action'=>'edit', $beneficiario['id']), array('class' => 'btn btn-warning btn-xs'));?>

													<?php echo $this->Html->link(__('Eliminar'), array('controller' => 'Beneficiarios', 'action'=>'delete', $beneficiario['id']), array('class' => 'btn btn-danger btn-xs'),__('Seguro de que desea Eliminar el Beneficiario: %s', $beneficiario['apellidos']. ' '.$beneficiario['nombres']));?>



												</td>
											</tr>
											<?php endforeach;?>
											<tr>
												<div class="actions">

													<?php echo $this->Html->link(__('Agregar Beneficiario'), array('controller' => 'Beneficiarios', 'action'=>'add', $titulare['Titulare']['id']), array('target'=>'_blank', 'class' => 'btn btn-success btn-xs'));?></div>

											
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


		