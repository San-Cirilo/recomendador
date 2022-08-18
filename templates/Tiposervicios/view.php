
<div class="card">
  <h5 class="card-header">#<?= $tiposervicio->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $tiposervicio->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Nombre')?>: <?= $tiposervicio->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Fecha')?>: <?= date_format($tiposervicio->created , 'd-m-Y')?></span>   
    </p>
    <?= $this->html->link('Aceptar',['controller' => 'tiposervicios','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'tiposervicios','action'=>'edit', $tiposervicio->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>