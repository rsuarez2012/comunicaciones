<div class="titulares view">
<h2><?php echo __('Titulare'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['fecha_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ingreso'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['fecha_ingreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar Nacimiento'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['lugar_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Civil'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['estado_civil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Personal'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['tipo_personal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatus'); ?></dt>
		<dd>
			<?php echo h($titulare['Titulare']['estatus']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Titulare'), array('action' => 'edit', $titulare['Titulare']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Titulare'), array('action' => 'delete', $titulare['Titulare']['id']), array(), __('Are you sure you want to delete # %s?', $titulare['Titulare']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Titulares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Titulare'), array('action' => 'add')); ?> </li>
	</ul>
</div>
