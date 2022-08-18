
<div class="card">
  <h5 class="card-header">#<?= $solicitude->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $solicitude->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Producto')?>: <?= $solicitude->has('producto') ? $this->Html->link($solicitude->producto->nombre, ['controller' => 'Productos', 'action' => 'view', $solicitude->producto->id]) : '' ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Prospecto')?>: <?= $solicitude->prospecto->nombre?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Prospecto')?>: <?= $solicitude->estado->nombre?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Fecha')?>: <?= date_format($solicitude->created, 'd-m-Y')?></span>   
    </p>
   
    <?= $this->html->link('Aceptar',['controller' => 'solicitudes','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'solicitudes','action'=>'edit', $solicitude->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>