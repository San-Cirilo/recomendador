<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>

<div class="row justify-content-center">
    <div class="col-md-6 col-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear Empresa</h2>
        </div>
        <hr>
        <?= $this->Form->create($empresa) ?>
            <div class="form-group">
                <?php
                    echo $this->Form->control('plan_id',['options' => $optPlan,'class'=>'form-control']);
                    echo $this->Form->control('razon_social',['class'=>'form-control']);
                    echo $this->Form->control('cedula',['class'=>'form-control']);
                    echo $this->Form->control('nombre_contacto',['class'=>'form-control']);
                    echo $this->Form->control('email_contacto',['class'=>'form-control']);
                    echo $this->Form->control('telefono_contacto',['class'=>'form-control']);
                    echo $this->Form->control('usuario',['class'=>'form-control']);
                    echo $this->Form->control('password',['class'=>'form-control']);
                    echo $this->Form->control('pais_id',['options' => $optPais,'class'=>'form-control']);
                    echo $this->Form->control('direccion',['class'=>'form-control']);
                    echo $this->Form->control('ciudad',['class'=>'form-control']);
                    echo $this->Form->control('telefono',['class'=>'form-control']);
                    echo $this->Form->checkbox('activo');
                ?>
            </div>
            <div class="button-group pt-3 pb-3">
                <?= $this->Form->button(__('Guardar'),['class'=>'btn btn-primary']) ?>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>

