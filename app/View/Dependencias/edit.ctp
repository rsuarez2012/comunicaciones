<div class="inner">
	<div class="row">
		
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Dependencia</div>
				<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<?php echo $this->Form->create('Dependencia'); ?>
							<?php
								echo $this->Form->input('id');
								echo $this->Form->input('nombre', array('class'=>'form-control'));
							?><br />
							
						<?php echo $this->Form->button('Editar', array('class'=>'btn btn-success'));?>
							<?php echo $this->Form->end(); ?>
					</div>
					</div>
		</div>
	</div>
</div>