


<div class="card">
  <h5 class="card-header">#<?= $producto->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $producto->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Nombre')?>: <?= $producto->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Empresa')?>: <?= $producto->empresa->razon_social ?></span>   
    </p>
    
    <p class="card-text">
        <span><?=__('Tipo de Servicio')?>: <?= $producto->tiposervicio->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Modelo de Servicio')?>: <?= $producto->modelo_servicio ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Precio')?>: $<?= number_format($producto->precio_promedio) ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Descripcion')?>: <?= $producto->descripcion ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Fecha')?>: <?= date_format($producto->created , 'd-m-Y') ?></span>   
    </p>
    <?= $this->html->link('Aceptar',['controller' => 'productos','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'productos','action'=>'edit', $producto->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>
