

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Perfiles</h2>
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
                    <?php foreach ($perfiles as $perfile): ?>
                    <tr>
                        <td><?= $this->Number->format($perfile->id) ?></td>
                        <td><?= h($perfile->nombre) ?></td>
                        <td><?= h($perfile->created) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $perfile->id],['class' => 'btn btn-info btn-sm']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $perfile->id],['class' => 'btn btn-primary btn-sm']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $perfile->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Perfil?', $perfile->id)]) ?>
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

