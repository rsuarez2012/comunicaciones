<div class="panel panel-default">
  
    <div class="panel-heading">Directivos&nbsp;  
            <?php echo $this->Html->link(__('Nuevo Director'), array('controller' => 'directivos', 'action'=>'add'),array('class' => 'btn btn-success btn-xs'));?>
                
    </div>
    <div class="tab-content">
        <div class="panel-body">
        <div class="table-responsive">
        <table id="example" class="display" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombres Apellidos</th>
                        <th>Cedula</th>
                        <th>Resolucion</th>
                        <th>Acciones</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nombres Apellidos</th>
                        <th>Cedula</th>
                        <th>Resolucion</th>
                        <th>Acciones</th>
                      
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($directivos as $directivo): ?>
            <tr>
                <td><?php echo h($directivo['Directivo']['id']); ?>&nbsp;</td>
				<td><?php echo h($directivo['Directivo']['nombres']). ' '.h($directivo['Directivo']['apellidos']); ?></td>
				<td><?php echo h($directivo['Directivo']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($directivo['Directivo']['resolucion']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $directivo['Directivo']['id']), array('class' => 'btn btn-info btn-xs')); ?>
                    
                    <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $directivo['Directivo']['id']), array('class' => 'btn btn-warning btn-xs')); ?>
                    
                    <?php //echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $dependencia['Dependencia']['id']), array('class' => 'btn btn-danger btn-xs'), array(), __('Seguro desea Eliminar el Titular #%s?', $dependencia['Dependencia']['id'])); ?>
                                                    
                                                    </td>
            </tr>
        <?php endforeach; ?>
                    </tbody>
    </table>
    </div>
    </div>
    </div>
</div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
        </script>








<!--<div class="directivos index">
	<h2><?php echo __('Directivos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('resolucion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($directivos as $directivo): ?>
	<tr>
		<td><?php echo h($directivo['Directivo']['id']); ?>&nbsp;</td>
		<td><?php echo h($directivo['Directivo']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($directivo['Directivo']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($directivo['Directivo']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($directivo['Directivo']['resolucion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $directivo['Directivo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $directivo['Directivo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $directivo['Directivo']['id']), array(), __('Seguro desea Eliminar # %s?', $directivo['Directivo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
		<li><?php echo $this->Html->link(__('Nuevo Directivo'), array('action' => 'add')); ?></li>
	</ul>
</div>-->
