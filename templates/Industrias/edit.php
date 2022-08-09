<div class="row justify-content-center">
    <div class="col-md-6 col-6 col-md-offset-3">
        <div class="page-header">
            <h2>Editar Industria</h2>
        </div>
        <hr>
        <?= $this->Form->create($industria) ?>
            <div class="form-group">
                <?php
                    echo $this->Form->control('nombre',['class' => 'form-control']);
                    echo $this->Form->control('tiposervicios._ids', ['type' => 'select', 'options' => $tiposervicios, 'class' => 'form-control']);
                ?>
            </div>
            <div class="button-group pt-3">
                <?= $this->Form->button(__('Guardar'),['class'=>'btn btn-primary']) ?>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>