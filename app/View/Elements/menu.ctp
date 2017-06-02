<!--<div id="navbar" class="navbar-collapse collapse">-->

<!--<ul class="nav navbar-nav navbar-right" style="display: block;">-->
<ul id="menu" class="collapse">
	<li class="panel">
		<a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
            <i class="icon-tasks"> </i> Comunicaciones     
	        <span class="pull-right">
                <i class="icon-angle-left"></i>
            </span>
                       
        </a>
        <ul class="collapse" id="component-nav">
        	<li class="">
            	<a href="<?php echo $this->webroot; ?>comunicaciones"><i class="icon-angle-right"></i> Lista de comunicaciones</a>
            </li>
            <li class="">
            	<a href="<?php echo $this->webroot; ?>comunicaciones/add"><i class="icon-angle-right"></i> Nueva comunicacion</a>
            </li>	
        </ul>
	</li>
		<?php if($user['role'] == 'admin'): ?>
					        <li><a href="<?php echo $this->webroot; ?>directivos">Directivos</a></li>

					        <li><a href="<?php echo $this->webroot; ?>dependencias">Dependencias</a></li>
					        <li><a href="<?php echo $this->webroot; ?>titulares">Titulares</a></li>
		<?php endif; ?>
					        <!--<li><a href="<?php //echo $this->webroot; ?>users/logout"><?php //echo $user['username'];?>&nbsp;Salir</a></li>	-->
					        <!--<li><a href="<?php //echo $this->webroot; ?>roles">Roles</a></li>	 -->
					    </ul>
					   <!-- </div> -->