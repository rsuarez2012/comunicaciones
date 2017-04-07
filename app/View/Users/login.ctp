<div class="users form">
<?php //echo $this->Flash->render('auth'); ?>
<?php echo $this->Session->flash(); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Por Favor Ingrese su Usuario y Clave'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>