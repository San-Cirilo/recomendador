
<div class="card">
  <h5 class="card-header">#<?= $paise->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $paise->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Nombre')?>: <?= $paise->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Bandera')?>: <?= $paise->bandera ?></span>    
    </p>
   
    <?= $this->html->link('Aceptar',['controller' => 'paises','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'paises','action'=>'edit', $paise->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>