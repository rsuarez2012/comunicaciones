



   <!-- PAGE CONTENT --> 
  
    <div class="tab-content">
        <div id="login" class="tab-pane active">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->Form->create('User', array('controller' => 'users', 'action'=> 'login', 'class'=>'form-signin')); ?>

                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Bienvenido, ingrese Usuario y Clave
                </p>
                <?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder'=>'Usuario', 'label' => false));?>

                <?php echo $this->Form->input('password', array('class'=>'form-control', 'placeholder' => 'Clave', 'label' => false));?>

                <?php echo $this->Form->button('<i class="icon-menu2"></i> Login', array('type' => 'submit','class'=>'btn text-muted text-center btn-danger', 'escape' => false));?>
                <?php echo $this->Form->end(); ?>

        </div>
        <!---<div id="forgot" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <input type="email"  required="required" placeholder="Your E-mail"  class="form-control" />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                 <input type="text" placeholder="First Name" class="form-control" />
                 <input type="text" placeholder="Last Name" class="form-control" />
                <input type="text" placeholder="Username" class="form-control" />
                <input type="email" placeholder="Your E-mail" class="form-control" />
                <input type="password" placeholder="password" class="form-control" />
                <input type="password" placeholder="Re type password" class="form-control" />
                <button class="btn text-muted text-center btn-success" type="submit">Register</button>
            </form>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>


</div>-->

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->


<!--<?php //echo $this->Flash->render('auth'); ?>
<?php //echo $this->Session->flash(); ?>
<?php //echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php //echo __('Por Favor Ingrese su Usuario y Clave'); ?>
        </legend>
        <?php //echo $this->Form->input('username');
        //echo $this->Form->input('password');
    ?>
    </fieldset>
<?php //echo this->Form->end(__('Login')); ?>
</div>-->