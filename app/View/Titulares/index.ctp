<div class="panel panel-default">
    <div class="panel-heading">Titulares</div>
        <div class="panel-body">
        <div class="table-responsive">
        <table id="example" class="display" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Apellidos y Nombres</th>
                        <th>Tipo Personal</th>
                        <th>Acciones</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Cedula</th>
                        <th>Apellidos y Nombres</th>
                        <th>Tipo Personal</th>
                        <th>Acciones</th>
                      
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($titulares as $titulare): ?>
            <tr>
                <td><?php echo h($titulare['Titulare']['cedula']); ?>&nbsp;</td>
                <td><?php echo h($titulare['Titulare']['apellidos']). ' '.h($titulare['Titulare']['nombres']); ?>&nbsp;</td>
                <td><?php echo h($titulare['Titulare']['tipo_personal']); ?>&nbsp;</td>

                
                <td>
                                                        <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $titulare['Titulare']['id']), array('class' => 'btn btn-info btn-xs')); ?>
                                                    <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $titulare['Titulare']['id']), array('class' => 'btn btn-warning btn-xs')); ?>
                                                    <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $titulare['Titulare']['id']), array('class' => 'btn btn-danger btn-xs'), array(), __('Seguro desea Eliminar el Titular #%s?', $titulare['Titulare']['id'])); ?>
                                                    
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