

<div class="card">
  <h5 class="card-header">#<?= $referencia->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $referencia->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Producto')?>: <?= $referencia->has('producto') ? $this->Html->link($referencia->producto->nombre, ['controller' => 'Productos', 'action' => 'view', $referencia->producto->id]) : '' ?> </span>   
    </p>
    <p class="card-text">
        <span><?=__('Usuario')?>: <?= $referencia->usuario->nombres ?></span>   
    </p>
    
    <p class="card-text">
        <span><?=__('Estado')?>: <?= $referencia->estado->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Cargo Contacto')?>: <?= $referencia->cargo_contacto ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Relacion Contacto')?>: <?= $referencia->relacion_contacto ?></span>    
    </p>
    
    <p class="card-text">
        <span><?=__('Fecha')?>: <?= date_format($referencia->created , 'd-m-Y') ?></span>   
    </p>
    <?= $this->html->link('Aceptar',['controller' => 'referencias','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'referencias','action'=>'edit', $referencia->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>