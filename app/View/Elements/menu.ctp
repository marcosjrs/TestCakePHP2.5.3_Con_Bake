<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('Restaurante', array('controller' => 'pages', 'action' => 'home'),array("class"=>"navbar-brand")); ?>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Meseros <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Listar meseros', array('controller' => 'meseros', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Crear nuevo mesero', array('controller' => 'meseros', 'action' => 'add')); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mesas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Listar mesas', array('controller' => 'mesas', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Crear nueva mesa', array('controller' => 'mesas', 'action' => 'add')); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cocineros <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Listar Cocineros', array('controller' => 'cocineros', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Crear nuevo Cocinero', array('controller' => 'cocineros', 'action' => 'add')); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Platos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Listar platos', array('controller' => 'platos', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Crear nuevo plato', array('controller' => 'platos', 'action' => 'add')); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias de Plato <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Listar categorias', array('controller' => 'categoriaplatos', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Crear nueva categoria', array('controller' => 'categoriaplatos', 'action' => 'add')); ?></li>
              </ul>
            </li>
           <!-- <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
	</nav>