
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
                    <th><?= $this->Paginator->sort('producto_id') ?></th>
                    <th><?= $this->Paginator->sort('prospecto_id') ?></th>
                    <th><?= $this->Paginator->sort('estado_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($solicitudes as $solicitude): ?>
                <tr>
                    <td><?= $this->Number->format($solicitude->id) ?></td>
                    <td><?= $solicitude->has('producto') ? $this->Html->link($solicitude->producto->id, ['controller' => 'Productos', 'action' => 'view', $solicitude->producto->id]) : '' ?></td>
                    <td><?= $solicitude->has('prospecto') ? $this->Html->link($solicitude->prospecto->id, ['controller' => 'Prospectos', 'action' => 'view', $solicitude->prospecto->id]) : '' ?></td>
                    <td><?= $solicitude->has('estado') ? $this->Html->link($solicitude->estado->id, ['controller' => 'Estados', 'action' => 'view', $solicitude->estado->id]) : '' ?></td>
                    <td><?= h($solicitude->created) ?></td>
                    <td><?= h($solicitude->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('Ver', ['action' => 'view', $solicitude->id],['class' => 'btn btn-info btn-sm']) ?>
                        <?= $this->Html->link('Editar', ['action' => 'edit', $solicitude->id],['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $solicitude->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Tipo de Servicio?', $tiposervicio->id)]) ?>
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
