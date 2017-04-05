<div class="comunicaciones view">
<h2><?php echo __('Comunicacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['id']); ?>
			&nbsp;
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
		<dt><?php echo __('# Comunicacion'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['numero_comuni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Director'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comunicacione['Directivo']['director'], array('controller' => 'directivos', 'action' => 'view', $comunicacione['Directivo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Copia A'); ?></dt>
		<dd>
			<?php echo h($comunicacione['Comunicacione']['copia_a']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Imprimir Comunicacion'), array('action' => 'comunicacion', $comunicacione['Comunicacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Comunicacione'), array('action' => 'edit', $comunicacione['Comunicacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comunicacione'), array('action' => 'delete', $comunicacione['Comunicacione']['id']), array(), __('Are you sure you want to delete # %s?', $comunicacione['Comunicacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunicaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comunicacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependencias'), array('controller' => 'dependencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependencia'), array('controller' => 'dependencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Directivos'), array('controller' => 'directivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directivo'), array('controller' => 'directivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
