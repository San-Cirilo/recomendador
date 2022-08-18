
<div class="card">
  <h5 class="card-header">#<?= $estado->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $estado->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Nombre')?>: <?= $estado->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Tipo')?>: <?= $estado->tipo ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Fecha')?>: <?= date_format($estado->created , 'd-m-Y') ?></span>   
    </p>
   
    <?= $this->html->link('Aceptar',['controller' => 'estados','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'estados','action'=>'edit', $estado->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>