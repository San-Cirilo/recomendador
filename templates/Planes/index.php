
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Planes</h2>
            <hr>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($planes as $plane): ?>
                    <tr>
                        <td><?= $this->Number->format($plane->id) ?></td>
                        <td><?= h($plane->nombre) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $plane->id],['class' => 'btn btn-info btn-sm']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $plane->id],['class' => 'btn btn-primary btn-sm']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $plane->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Plan?', $plane->id)]) ?>
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
