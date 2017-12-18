<div class="panel panel-default">
    <div class="panel-heading">Lista de Comunicaciones</div>
        <div class="panel-body">
        <div class="table-responsive">
        <table id="example" class="display" width="100%" cellspacing="0">
                <thead>
						            <tr>
						                <th>Dependencia</th>
						                <th>Asunto</th>
						                <th>Fecha</th>
						                <th>Comunicacion</th>
						                <th>Accion</th>
						            </tr>
						        </thead>
                <tfoot>
                    <tr>
						                <th>Dependencia</th>
						                <th>Asunto</th>
						                <th>Fecha</th>
						                <th>Comunicacion</th>
						                <th>Accion</th>
						            </tr>
                </tfoot>
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
											<?php //echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $comunicacione['Comunicacione']['id']), array('class' => 'btn btn-danger btn-xs'), array(), __('Seguro desea Eliminar la Comunicacion #%s?', $comunicacione['Comunicacione']['numero_comuni'])); ?>
											
											</td>
										</tr>
									<?php endforeach; ?>
                    </tbody>
    </table>
    </div>
    </div>
</div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

	
