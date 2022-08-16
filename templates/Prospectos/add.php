

<div class="row justify-content-center">
    <div class="col-md-6 col-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear Prospecto</h2>
        </div>
        <hr>
        <?= $this->Form->create($prospecto) ?>
            <div class="form-group">
            <?php
                    echo $this->Form->control('industria_id', ['class'=>'form-control','options' => $industrias]);
                    echo $this->Form->control('pais_id',['class'=>'form-control','options' => $paises]);
                    echo $this->Form->control('nombre',['class' => 'form-control']);
                    echo $this->Form->control('descripcion',['class' => 'form-control']);
                ?>
            </div>
            <div class="button-group pt-3 pb-3">
                <?= $this->Form->button(__('Guardar'),['class'=>'btn btn-primary']) ?>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>
