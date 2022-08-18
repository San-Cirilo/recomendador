


<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Prospectos</h2>
            <hr>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('industria_id') ?></th>
                    <th><?= $this->Paginator->sort('pais_id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('created',['creado']) ?></th>
                    <th><?= $this->Paginator->sort('modified',['modificado']) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($prospectos as $prospecto): ?>
                <tr>
                    <td><?= $this->Number->format($prospecto->id) ?></td>
                    <td><?= $prospecto->has('industria') ? $this->Html->link($prospecto->industria->nombre, ['controller' => 'Industrias', 'action' => 'view', $prospecto->industria->id]) : '' ?></td>
                    <td><?= h($prospecto->paise->nombre) ?></td>
                    <td><?= h($prospecto->nombre) ?></td>
                    <td><?= h(date_format($prospecto->created, 'd-m-Y')) ?></td>
                    <td><?= h(date_format($prospecto->modified, 'd-m-Y')) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('Ver', ['action' => 'view', $prospecto->id],['class' => 'btn btn-info btn-sm']) ?>
                        <?= $this->Html->link('Editar', ['action' => 'edit', $prospecto->id],['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $prospecto->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Prospecto?', $prospecto->id)]) ?>
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
