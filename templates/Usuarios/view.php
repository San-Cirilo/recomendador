
<div class="card">
  <h5 class="card-header">#<?= $Usuario->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $Usuario->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Nombre')?>: <?= $Usuario->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Apellidos')?>: <?= $Usuario->apellidos ?></span>    
    </p>
    <p class="card-text">
        <span><?=__('Email')?>: <?= $Usuario->email ?></span>    
    </p>
    <p class="card-text">
        <span><?=__('Telefono')?>: <?= $Usuario->telefono ?></span>    
    </p>
    <p class="card-text">
        <span><?=__('Perfil')?>: <?= $Usuario->perfil_id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Empresa')?>: <?= $Usuario->empresa_id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Fecha')?>: <?= $Usuario->created ?></span>   
    </p>
    <?= $this->html->link('Aceptar',['controller' => 'Usuarios','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'Usuarios','action'=>'edit', $Usuario->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>