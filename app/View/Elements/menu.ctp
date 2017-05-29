<div id="navbar" class="navbar-collapse collapse">

<ul class="nav navbar-nav navbar-right" style="display: block;">
					        <li><a href="<?php echo $this->webroot; ?>comunicaciones">Comunicaciones</a></li>
		<?php if($user['role'] == 'admin'): ?>
					        <li><a href="<?php echo $this->webroot; ?>directivos">Directivos</a></li>

					        <li><a href="<?php echo $this->webroot; ?>dependencias">Dependencias</a></li>
					        <li><a href="<?php echo $this->webroot; ?>titulares">Titulares</a></li>
		<?php endif; ?>
					        <li><a href="<?php echo $this->webroot; ?>users/logout"><?php echo $user['username'];?>&nbsp;Salir</a></li>	
					        <!--<li><a href="<?php //echo $this->webroot; ?>roles">Roles</a></li>	 -->
					    </ul>
					    </div>