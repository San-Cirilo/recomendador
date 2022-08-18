

<div class="card">
  <h5 class="card-header">#<?= $empresa->id ?></h5>
  <div class="card-body">
    <h5 class="card-title">Información</h5>
    <p class="card-text">
        <span><?=__('Id')?>: <?= $empresa->id ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Razon Social')?>: <?= $empresa->razon_social ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Cedula')?>: <?= $empresa->cedula ?></span>    
    </p>
    <p class="card-text">
        <span><?=__('Nombre contacto')?>: <?= $empresa->nombre_contacto ?></span>    
    </p>
    <p class="card-text">
        <span><?=__('Email Contacto')?>: <?= $empresa->email_contacto ?></span>    
    </p>
    <p class="card-text">
        <span><?=__('Direccion')?>: <?= $empresa->direccion ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Ciudad')?>: <?= $empresa->ciudad ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Telefono')?>: <?= $empresa->telefono ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Plan')?>: <?= $empresa->plane->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Pais')?>: <?= $empresa->paise->nombre ?></span>   
    </p>
    <p class="card-text">
        <span><?=__('Fecha')?>: <?= date_format($empresa->created , 'd-m-Y') ?></span>   
    </p>
    <?= $this->html->link('Aceptar',['controller' => 'empresas','action'=>'index'],['class'=>'btn btn-primary']) ?>
    <?= $this->html->link('Editar',['controller' => 'empresas','action'=>'edit', $empresa->id],['class'=>'btn btn-primary']) ?>
  </div>
</div>