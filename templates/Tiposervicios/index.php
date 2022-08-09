

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Tipo de Servicios</h2>
            <hr>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('created',['Creado']) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tiposervicios as $tiposervicio): ?>
                <tr>
                    <td><?= $this->Number->format($tiposervicio->id) ?></td>
                    <td><?= h($tiposervicio->nombre) ?></td>
                    <td><?= h($tiposervicio->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('Ver', ['action' => 'view', $tiposervicio->id],['class' => 'btn btn-info btn-sm']) ?>
                        <?= $this->Html->link('Editar', ['action' => 'edit', $tiposervicio->id],['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $tiposervicio->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Tipo de Servicio?', $tiposervicio->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('Anterior'),['class' => 'page-item']) ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>
