
<div class="row justify-content-center">
    <div class="col-md-6 col-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear Usuario</h2>
        </div>
        <hr>
        <?= $this->Form->create($Usuario) ?>
            <div class="form-group">
                <?php
                    echo $this->Form->control('perfil_id',['options'=>$optPerfiles,'class'=>'form-control']);
                    echo $this->Form->control('empresa_id',['options'=>$optEmpresas,'class'=>'form-control']);
                    echo $this->Form->control('nombres',['class'=>'form-control']);
                    echo $this->Form->control('apellidos',['class'=>'form-control']);
                    echo $this->Form->control('email',['class'=>'form-control']);
                    echo $this->Form->control('telefono',['class'=>'form-control']);
                    echo $this->Form->control('password',['class'=>'form-control']);
                ?>
            </div>
            <div class="button-group pt-3">
                <?= $this->Form->button(__('Guardar'),['class'=>'btn btn-primary']) ?>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>


