

<div class="card">
  <h5 class="card-header">#<?= $industria->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $industria->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Nombre')?>: <?= $industria->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Fecha')?>: <?= date_format($industria->created , 'd-m-Y') ?></span>   
    </p>
   
    <?= $this->html->link('Aceptar',['controller' => 'industrias','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'industrias','action'=>'edit', $industria->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>