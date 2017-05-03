<div class="comunicaciones view">
<h2><?php echo __('Comunicacione'); //pr($comunicacione);?></h2>
	<dl>
		<!--<dt><?php //echo __('Id'); ?></dt>
		<dd>
			<?php //echo h($comunicacione['Comunicacione']['id']); ?>
			&nbsp;
		</dd>-->

		<dt><?php echo __('# Comunicacion'); ?></dt>
		<dd>
			<?php 

				echo str_pad(h($comunicacione['Comunicacione']['numero_comuni']),3,'0',STR_PAD_LEFT); 
				

				 ?>
		</dd>

		<dt><?php echo __('Para'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comunicacione['Dependencia']['nombre'], array('controller' => 'dependencias', 'action' => 'view', $comunicacione['Dependencia']['id'])); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Asunto'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['asunto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); //hay que modificacar el formato de fecha?></dt>
		<dd> 
			<?php echo date("d-m-Y", strtotime(h($comunicacione['Comunicacione']['fecha']))); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuerpo'); ?></dt>
		<dd style="border:1">
			<?php echo h($comunicacione['Comunicacione']['cuerpo']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Director'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comunicacione['Directivo']['director'], array('controller' => 'directivos', 'action' => 'view', $comunicacione['Directivo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Copia A'); ?></dt>
		<dd>
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
					$i=1;
					foreach($copias as $copia) { ?>

					<?php echo $copia['Dependencia']['nombre'];?><br>
				<?php $i++;		 }?>
				

			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Accion'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Imprimir'), array('action' => 'comunicacion', $comunicacione['Comunicacione']['id'])); ?> </li><br>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $comunicacione['Comunicacione']['id'])); ?> </li><br>
		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $comunicacione['Comunicacione']['id']), array(), __('Seguro desea Eliminar la Comunicacion # %s?', $comunicacione['Comunicacione']['numero_comuni'])); ?> </li>
	</ul>
</div>
