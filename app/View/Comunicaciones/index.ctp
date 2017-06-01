	<div class="inner">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
    				<div class="panel-heading">Lista de Comunicaciones</div>
			    	<div class="panel-body">
			        	<div class="table-responsive">
						    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
						        <thead>
						            <tr>
						                <th>Dependencia</th>
						                <th>Asunto</th>
						                <th>Fecha</th>
						                <th>Comunicacion</th>
						                <th>Accion</th>
						            </tr>
						        </thead>
				                <tbody>
					                <?php foreach ($comunicaciones as $comunicacione): ?>
										<tr>
											<td>
												<?php echo $this->Html->link($comunicacione['Dependencia']['nombre'], array('controller' => 'dependencias', 'action' => 'view', $comunicacione['Dependencia']['id'])); ?>
											</td>

											<td><?php echo h($comunicacione['Comunicacione']['asunto']); ?>&nbsp;</td>
											<td><?php echo date("d-m-Y", strtotime(h($comunicacione['Comunicacione']['fecha']))); ?>&nbsp;</td>

											<td><b align="center"><?php echo str_pad(h($comunicacione['Comunicacione']['numero_comuni']),3,'0',STR_PAD_LEFT); ?>&nbsp;</b></td>
											<td>
												<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-info btn-xs')); ?>
											<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-warning btn-xs')); ?>
											<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-danger btn-xs'), array(), __('Seguro desea Eliminar la Comunicacion #%s?', $comunicacione['Comunicacione']['numero_comuni'])); ?>
											
											</td>
										</tr>
									<?php endforeach; ?>
				                </tbody>
                            </table>
                        </div>
                	</div>
                </div>
            </div>
		</div>
	</div>

	<div class="actions">
		<h3><?php echo __('Acciones'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Comunicacion'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Lista Dependencias'), array('controller' => 'dependencias', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nueva Dependencia'), array('controller' => 'dependencias', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Lista Directivos'), array('controller' => 'directivos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Director'), array('controller' => 'directivos', 'action' => 'add')); ?> </li>
		</ul>
	</div>


     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
	</script>