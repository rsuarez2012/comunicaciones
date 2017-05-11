<div class="comunicaciones form">
<?php echo $this->Form->create('Comunicacione'); ?>


 <?php echo $this->Form->hidden('ComunicacionesDependencia.dependencia_id', array('label'=>false, 'name' => 'data[ComunicacionesDependencia][dependencia_id]'));?>
	<fieldset>
		<legend><?php echo __('Nueva Comunicacion'); ?></legend>
		<!--<label>Num.:</label>-->
	<?php 
		//echo str_pad(($numero_comunicacion),3,'0',STR_PAD_LEFT); 
		//$num = str_pad((00),3,'0',STR_PAD_LEFT);
	?>
	<label><b>Numero Comunicacion</b></label>
	<?php
		//$num = str_pad(($numero_comunicacion + 1),8,'0',STR_PAD_LEFT);

		
			echo $this->Form->input('numero_comuni',
				array('numero_comuni', 'label'=>false));
		




		echo $this->Form->input('dependencia_id');//,array('multiple'=> true)
		
		echo $this->Form->input('asunto');
		echo $this->Form->input('fecha', array('dateFormat'=>'DMY'));
		echo $this->Form->input('cuerpo');
		echo $this->Form->input('directivo_id',array('type'=> 'hidden'));
		?>

		<label><b>Enviar Copia A</b></label>
		<?php echo $this->Form->input('Dependencia.Dependencia', array('multiple'=>true, 'label'=>false));?>







		<?php
		//echo $this->Form->input('copia_a');//,array('multiple'=> true, 'options'=>array('dependencias')));
		//echo $this->Form->input('ComunicacionesDependencia.dependencia_id', array('multiple'=>true));//,array('multiple'=> true, 'options'=>array('dependencias')));
	?>
	<!--<label>Copia a:</label>-->
	<?php 
			//$dependencias = array('VRAD'=>'VRAD','VRAC'=>'VRAC');
			//echo $this->Form->input('copia_a',array('multiple'=> true, 'options'=>$dependencias));?>
			<label><b>Anexo</b></label>
			<?php echo $this->Form->checkbox('anexo', array('label'=>'false'));?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Comunicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Dependencias'), array('controller' => 'dependencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Dependencia'), array('controller' => 'dependencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Directivos'), array('controller' => 'directivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Directivo'), array('controller' => 'directivos', 'action' => 'add')); ?> </li>
	</ul>
</div>