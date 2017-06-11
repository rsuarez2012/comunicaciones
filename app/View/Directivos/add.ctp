<div class="inner">
	<div class="row">
		
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo Director</div>
				<div class="tab-content">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<?php echo $this->Form->create('Directivo');?>
							<?php
								echo $this->Form->input('nombres', array('class'=>'form-control'));
								echo $this->Form->input('apellidos', array('class'=>'form-control'));
								echo $this->Form->input('cedula', array('class'=>'form-control'));
								echo $this->Form->input('resolucion', array('class'=>'form-control'));
							?>
							<br />
							<?php echo $this->Form->button('Editar', array('class'=>'btn btn-success'));?>
							<?php echo $this->Form->end(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Directivos'), array('action' => 'index')); ?></li>
	</ul>
</div>-->