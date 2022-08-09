
<div class="row justify-content-center">
    <div class="col-md-6 col-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear Pais</h2>
        </div>
        <hr>
        <?= $this->Form->create($paise) ?>
            <div class="form-group">
                <label for="nombre">Nombre del Pais</label>
                <?= $this->Form->input('nombre',['class'=>'form-control']); ?>
                <label for="bandera">Bandera</label>
                <?=$this->Form->input('bandera',['class'=>'form-control']);?>
            </div>
            <div class="button-group pt-3">
                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>
