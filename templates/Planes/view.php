
<div class="card">
  <h5 class="card-header">#<?= $plane->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $plane->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Nombre')?>: <?= $plane->nombre ?></span>   
    </p>
   
    <?= $this->html->link('Aceptar',['controller' => 'planes','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'planes','action'=>'edit', $plane->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>