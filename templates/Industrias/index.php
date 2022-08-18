
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Industrias</h2>
            <hr>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($industrias as $industria): ?>
                        <tr>
                            <td><?= $this->Number->format($industria->id) ?></td>
                            <td><?= h($industria->nombre) ?></td>
                            <td><?= h(date_format($industria->created, 'd-m-Y')) ?></td>
                            <td><?= h(date_format($industria->modified, 'd-m-Y')) ?></td>
                            <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $industria->id],['class' => 'btn btn-info btn-sm']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $industria->id],['class' => 'btn btn-primary btn-sm']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $industria->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar industria?', $industria->id)]) ?>
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

