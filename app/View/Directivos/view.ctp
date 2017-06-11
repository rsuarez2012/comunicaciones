<div class="panel panel-info">
  <!-- Default panel contents -->
  	<div class="panel-heading">
  		</h4>Director(a): <?php echo h($directivo['Directivo']['nombres'].' '.h($directivo['Directivo']['apellidos']));?></h4>
  
  	</div>		
  	<div class="tab-content">
  		<table class="table">
  	
  	
  		
  		<tr>
  			<th><?php echo __('Cedula'); ?></th> 
  			<th><?php echo __('Resolución'); ?></th>

  		</tr>
  		<tr>
  			<td><?php echo h($directivo['Directivo']['cedula']); ?></td>
  			<td><?php echo h($directivo['Directivo']['resolucion']); ?></td>
  			

  		</tr>
  		
  	</table>
            </div>
        </div>
	</div>
</div>



<!--<div class="directivos view">
<h2><?php echo __('Directivo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($directivo['Directivo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($directivo['Directivo']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($directivo['Directivo']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($directivo['Directivo']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resolucion'); ?></dt>
		<dd>
			<?php echo h($directivo['Directivo']['resolucion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Directivo'), array('action' => 'edit', $directivo['Directivo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Directivo'), array('action' => 'delete', $directivo['Directivo']['id']), array(), __('Seguro desea Eliminar # %s?', $directivo['Directivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Directivos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Directivo'), array('action' => 'add')); ?> </li>
	</ul>
</div>-->	
