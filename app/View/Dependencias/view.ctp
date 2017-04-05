<div class="dependencias view">
<h2><?php echo __('Dependencia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dependencia['Dependencia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($dependencia['Dependencia']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dependencia'), array('action' => 'edit', $dependencia['Dependencia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dependencia'), array('action' => 'delete', $dependencia['Dependencia']['id']), array(), __('Are you sure you want to delete # %s?', $dependencia['Dependencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependencia'), array('action' => 'add')); ?> </li>
	</ul>
</div>
