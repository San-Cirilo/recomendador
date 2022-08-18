
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Solicitudes</h2>
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
                    <th><?= $this->Paginator->sort('created',['Creado']) ?></th>
                    <th><?= $this->Paginator->sort('modified',['Modificado']) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($solicitudes as $solicitude): ?>
                <tr>
                    <td><?= $this->Number->format($solicitude->id) ?></td>
                    <td><?= $solicitude->has('producto') ? $this->Html->link($solicitude->producto->nombre, ['controller' => 'Productos', 'action' => 'view', $solicitude->producto->id]) : '' ?></td>
                    <td><?= $solicitude->has('prospecto') ? $this->Html->link($solicitude->prospecto->nombre, ['controller' => 'Prospectos', 'action' => 'view', $solicitude->prospecto->id]) : '' ?></td>
                    <td><?= $solicitude->has('estado') ? $this->Html->link($solicitude->estado->nombre, ['controller' => 'Estados', 'action' => 'view', $solicitude->estado->id]) : '' ?></td>
                    <td><?= h(date_format($solicitude->created, 'd-m-Y')); ?></td>
                    <td><?= h(date_format($solicitude->modified, 'd-m-Y')); ?></td>
                    <td class="actions">
                        <?= $this->Html->link('Ver', ['action' => 'view', $solicitude->id],['class' => 'btn btn-info btn-sm']) ?>
                        <?= $this->Html->link('Editar', ['action' => 'edit', $solicitude->id],['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $solicitude->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Tipo de Servicio?', $solicitude->id)]) ?>
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
