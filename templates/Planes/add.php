<div class="row justify-content-center">
    <div class="col-md-6 col-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear Plan</h2>
        </div>
        <hr>
        <?= $this->Form->create($plane) ?>
            <div class="form-group">
                <?php
                    echo $this->Form->control('nombre',['class' => 'form-control']);
                ?>
            </div>
            <div class="button-group pt-3">
                <?= $this->Form->button(__('Guardar'),['class'=>'btn btn-primary']) ?>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>