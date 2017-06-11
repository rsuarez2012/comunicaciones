<div class="panel panel-default">
  
    <div class="panel-heading">Dependencias&nbsp;  
            <?php echo $this->Html->link(__('Nueva Dependencia'), array('controller' => 'dependencias', 'action'=>'add'),array('class' => 'btn btn-success btn-xs'));?>
                
    </div>
        <div class="panel-body">
        <div class="table-responsive">
        <table id="example" class="display" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Dependencia</th>
                        <th>Acciones</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Dependencia</th>
                        <th>Acciones</th>
                      
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($dependencias as $dependencia): ?>
            <tr>
                <td><?php echo h($dependencia['Dependencia']['id']); ?>&nbsp;</td>
		<td><?php echo h($dependencia['Dependencia']['nombre']); ?></td>
                <td>
                                                        <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $dependencia['Dependencia']['id']), array('class' => 'btn btn-info btn-xs')); ?>
                                                    <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $dependencia['Dependencia']['id']), array('class' => 'btn btn-warning btn-xs')); ?>
                                                    <?php //echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $dependencia['Dependencia']['id']), array('class' => 'btn btn-danger btn-xs'), array(), __('Seguro desea Eliminar el Titular #%s?', $dependencia['Dependencia']['id'])); ?>
                                                    
                                                    </td>
            </tr>
        <?php endforeach; ?>
                    </tbody>
    </table>
    </div>
    </div>
</div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

<div class="dependencias index">
	<h2><?php echo __('Dependencias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dependencias as $dependencia): ?>
	<tr>
		<td><?php echo h($dependencia['Dependencia']['id']); ?>&nbsp;</td>
		<td><?php echo h($dependencia['Dependencia']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $dependencia['Dependencia']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $dependencia['Dependencia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $dependencia['Dependencia']['id']), array(), __('Seguro desea eliminar esta dependencia # %s?', $dependencia['Dependencia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Dependencia'), array('action' => 'add')); ?></li>
	</ul>
</div>
