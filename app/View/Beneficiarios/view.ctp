<div class="beneficiarios view">
<h2><?php echo __('Beneficiario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($beneficiario['Beneficiario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($beneficiario['Beneficiario']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($beneficiario['Beneficiario']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($beneficiario['Beneficiario']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
			<?php echo h($beneficiario['Beneficiario']['fecha_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parentesco'); ?></dt>
		<dd>
			<?php echo h($beneficiario['Beneficiario']['parentesco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulare Id'); ?></dt>
		<dd>
			<?php echo h($beneficiario['Beneficiario']['titulare_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Beneficiario'), array('action' => 'edit', $beneficiario['Beneficiario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Beneficiario'), array('action' => 'delete', $beneficiario['Beneficiario']['id']), array(), __('Are you sure you want to delete # %s?', $beneficiario['Beneficiario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Beneficiarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beneficiario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Titulares'), array('controller' => 'titulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Titulare'), array('controller' => 'titulares', 'action' => 'add')); ?> </li>
	</ul>
</div>
