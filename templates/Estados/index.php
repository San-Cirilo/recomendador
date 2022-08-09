
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Estados</h2>
            <hr>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($estados as $estado): ?>
                <tr>
                    <td><?= $this->Number->format($estado->id) ?></td>
                    <td><?= h($estado->nombre) ?></td>
                    <td><?= $this->Number->format($estado->tipo) ?></td>
                    <td><?= h($estado->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('Ver', ['action' => 'view', $estado->id],['class' => 'btn btn-info btn-sm']) ?>
                        <?= $this->Html->link('Editar', ['action' => 'edit', $estado->id],['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $estado->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Estado?', $estado->id)]) ?>
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
