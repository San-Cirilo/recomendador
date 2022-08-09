<?php if($current_usuario):?>
<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <?= $this->Html->link('Home',['controller' => 'Usuarios', 'action' => 'index'],['class'=>'navbar-brand']); ?>
        
        <div class="btn-group dropstart">
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Acciones
            </button>
            <ul class="dropdown-menu">
                <li><?= $this->Html->link('Perfil',['controller' => 'Usuarios','action' => 'View',$current_usuario['id']],['class'=>'dropdown-item']) ?></li>
                <li><hr class="dropdown-divider"></li>
                <li><?= $this->Html->link('Cerrar Sesión',['controller' => 'Usuarios','action' => 'logout',],['class'=>'dropdown-item']) ?></li>
            </ul>
        </div>
    </div>
    
</nav>
<?php endif; ?>