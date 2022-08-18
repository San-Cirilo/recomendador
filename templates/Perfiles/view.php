
<div class="card">
  <h5 class="card-header">#<?= $perfile->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $perfile->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Nombre')?>: <?= $perfile->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Fecha')?>: <?= date_format($perfile->created, 'd-m-Y') ?></span>    
    </p>
   
    <?= $this->html->link('Aceptar',['controller' => 'perfiles','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'perfiles','action'=>'edit', $perfile->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>