
<div class="card">
  <h5 class="card-header">#<?= $prospecto->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $prospecto->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Nombre')?>: <?= $prospecto->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Industria')?>: <?= $prospecto->industria->nombre ?></span>   
    </p>
    
    <p class="card-text">
        <span><?=__('Pais')?>: <?= $prospecto->paise->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Descripcion')?>: <?= $prospecto->descripcion ?></span>   
    </p>
    
    <p class="card-text">
        <span><?=__('Fecha')?>: <?= date_format($prospecto->created , 'd-m-Y') ?></span>   
    </p>
    <?= $this->html->link('Aceptar',['controller' => 'prospectos','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'prospectos','action'=>'edit', $prospecto->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>