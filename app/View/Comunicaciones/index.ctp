<div class="comunicaciones index">
	<h2><?php echo __('Comunicaciones'); ?></h2>

<?php
/*echo $this->Form->create('Comunicaciones',array('controller' => 'comunicaciones','action' => 'search'));
echo $this->Form->input('id');
 echo $this->Form->submit('buscar');
echo $this->Form->end('');*/
?> 
	<?php //echo $this->Form->create('Comunicacione',array('action'=>'search'));?>
	<fieldset>
 		<legend><?php //echo __('Post Search', true);?></legend>
	<?php
		//echo $form->input('Search.keywords');
		//echo $this->Form->input('Search.id');
		//echo $this->Form->input('Search.asunto',array('after'=>__('wildcard is *',true)));
		//echo $form->input('Search.body',array('after'=>__('wildcard is *',true)));
		/*echo $form->input('Search.active',array(
			'empty'=>__('Any',true),
			'options'=>array(
				0=>__('Inactive',true),
				1=>__('Active',true),
			),
		));*/
		//echo $form->input('Search.created', array('after'=>'eg: >= 2 weeks ago'));
		//echo $form->input('Search.category_id');
		//echo $form->input('Search.tag');
		//echo $form->input('Search.tag_id');
		//echo $this->Form->submit('Search');
	?>
	</fieldset>
<?php //echo $this->Form->end();?>


	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dependencia_id'); ?></th>
			<th><?php //echo $this->Paginator->sort('directivo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('asunto'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php //echo $this->Paginator->sort('cuerpo'); ?></th>
			<th><?php echo $this->Paginator->sort('comunicacion'); ?></th>
			<th><?php //echo $this->Paginator->sort('copia_a'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($comunicaciones as $comunicacione): ?>
	<tr>
		<td><?php echo h($comunicacione['Comunicacione']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comunicacione['Dependencia']['nombre'], array('controller' => 'dependencias', 'action' => 'view', $comunicacione['Dependencia']['id'])); ?>
		</td>
		<td>
			<?php //echo $this->Html->link($comunicacione['Directivo']['director'], array('controller' => 'directivos', 'action' => 'view', $comunicacione['Directivo']['id'])); ?>
		</td>
		<td><?php echo h($comunicacione['Comunicacione']['asunto']); ?>&nbsp;</td>
		<td><?php echo date("d-m-Y", strtotime(h($comunicacione['Comunicacione']['fecha']))); ?>&nbsp;</td>
		<td><?php //echo h($comunicacione['Comunicacione']['cuerpo']); ?>&nbsp;</td>

		<td><b align="center"><?php echo str_pad(h($comunicacione['Comunicacione']['numero_comuni']),3,'0',STR_PAD_LEFT); ?>&nbsp;</b></td>

		<td><?php //echo h($comunicacione['Comunicacione']['copia_a']); ?>&nbsp;</td>


		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $comunicacione['Comunicacione']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $comunicacione['Comunicacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $comunicacione['Comunicacione']['id']), array(), __('Seguro desea Eliminar la Comunicacion #%s?', $comunicacione['Comunicacione']['numero_comuni'])); ?>
		</td>


	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<?php $this->Paginator->options(array('url' => $this->passedArgs)); ?>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registro de {:count} total, Empezando en el registro {:start}, terminando en el {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Comunicacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Dependencias'), array('controller' => 'dependencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Dependencia'), array('controller' => 'dependencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Directivos'), array('controller' => 'directivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Director'), array('controller' => 'directivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
