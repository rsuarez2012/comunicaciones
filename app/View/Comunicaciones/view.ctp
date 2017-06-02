<div class="panel panel-default">
    <div class="panel-heading">
        <h4><?php echo __('Comunicacion numero:').' '.str_pad(h($comunicacione['Comunicacione']['numero_comuni']),3,'0',STR_PAD_LEFT) ; //pr($comunicacione);?></h4>
    </div>
    <div class="panel-body">
        <ul class="nav nav-pills">
        	<li class="active" >
        		<?php echo $this->Html->link(__('Imprimir'), array('action' => 'comunicacion', $comunicacione['Comunicacione']['id']),array('target' => '_blank')); ?> 
        	</li>
            <li>
            	<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $comunicacione['Comunicacione']['id'])); ?> 
            </li>
			<li>
				<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $comunicacione['Comunicacione']['id']), array(), __('Seguro desea Eliminar la Comunicacion # %s?', $comunicacione['Comunicacione']['numero_comuni'])); ?> 
			</li>           
                               
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade in active" id="home-pills">

                                <div class="comunicaciones view">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            Vista Previa de la Comunicacion
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                   <!-- <thead>-->
                                        <tr>
                                            <th># Comunicacion</th>
                                            <th>Para</th>
                                            <th>Asunto</th>
                                            <th>Fecha</th>
                                            
                                        </tr>
                                    <!--</thead>-->
                                    
                                        <tr>
                                            <td><?php echo str_pad(h($comunicacione['Comunicacione']['numero_comuni']),3,'0',STR_PAD_LEFT);?></td>
                                            <td><?php echo $this->Html->link($comunicacione['Dependencia']['nombre'], array('controller' => 'dependencias', 'action' => 'view', $comunicacione['Dependencia']['id'])); ?></td>
                                            <td><?php echo h($comunicacione['Comunicacione']['asunto']); ?></td>
                                            <td><?php echo date("d-m-Y", strtotime(h($comunicacione['Comunicacione']['fecha']))); ?></td>
                                            
                                        </tr>
                                        <tr>
                                        	<th colspan="1"></th>
                                            <th colspan="3" style="text-aling:center;">Cuerpo</th>
                                            
                                        </tr>
                                        <tr class="danger">
                                            <td colspan="4"><?php echo h($comunicacione['Comunicacione']['cuerpo']); ?></td>
                                            
                                        </tr>
                                        <tr>
                                        	<th>Director</th>
                                        	<th>Copias A</th>
                                        	<th colspan="2">Anexos</th>
                                        	
                                        </tr>
                                   		<tr>
                                        	<td><?php echo $this->Html->link($comunicacione['Directivo']['director'], array('controller' => 'directivos', 'action' => 'view', $comunicacione['Directivo']['id'])); ?></td>
                                        	<td><?php 
					$i=1;
					foreach($copias as $copia) { ?>

					<?php echo $copia['Dependencia']['nombre'];?>.<br>
				<?php $i++;		 }?></td>
                                        	<td colspan="2"><?php if($comunicacione['Comunicacione']['anexo'] == 1){?>
							<?php echo "Si posee anexos";?>
				<?php }else{ ?>
							<?php echo "No posee anexos";?>
				<?php } ?> </td>
                                        	
                                        	
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
	
			<?php //echo h($comunicacione[0]['Comunicacione']['ComunicacionesDependencia']['dependencia_id']); 

				//echo h($copias[1]['Dependencia']['nombre']);?>


			<?php //echo pr($copias);?>



			<?php 
				/*$i=1;
				foreach($comunicacione[$id] as $copia){
					$copia['ComunicacionesDependencia']['dependencia_id'];
					$i++;
				};
				$i=1;
				foreach($copias as $copia){
					$copia['Dependencia']['nombre'];
				$i++;
				};*/
				?>
				
				

		
			
				<?php 
					/*$i=1;
					foreach($copias as $copia) { ?>

					<?php echo $copia['Dependencia']['nombre'];?><br>
				<?php $i++;		 }*/?>

</div>
                                    
                      

<!--<div class="actions">
	<h3><?php //echo __('Accion'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('Imprimir'), array('action' => 'comunicacion', $comunicacione['Comunicacione']['id']),array('target' => '_blank')); ?> </li><br>
		<li><?php //echo $this->Html->link(__('Editar'), array('action' => 'edit', $comunicacione['Comunicacione']['id'])); ?> </li><br>
		<li><?php //echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $comunicacione['Comunicacione']['id']), array(), __('Seguro desea Eliminar la Comunicacion # %s?', $comunicacione['Comunicacione']['numero_comuni'])); ?> </li>
	</ul>
</div>-->
