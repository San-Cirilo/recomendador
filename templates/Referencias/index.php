

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
                    <th><?= $this->Paginator->sort('producto_id') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th><?= $this->Paginator->sort('estado_id') ?></th>
                    <th><?= $this->Paginator->sort('prospecto_id') ?></th>
                    <th><?= $this->Paginator->sort('cargo_contacto') ?></th>
                    <th><?= $this->Paginator->sort('relacion_contacto') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($referencias as $referencia): ?>
                <tr>
                    <td><?= $this->Number->format($referencia->id) ?></td>
                    <td><?= $referencia->has('producto') ? $this->Html->link($referencia->producto->id, ['controller' => 'Productos', 'action' => 'view', $referencia->producto->id]) : '' ?></td>
                    <td><?= $referencia->has('usuario') ? $this->Html->link($referencia->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $referencia->usuario->id]) : '' ?></td>
                    <td><?= $referencia->has('estado') ? $this->Html->link($referencia->estado->id, ['controller' => 'Estados', 'action' => 'view', $referencia->estado->id]) : '' ?></td>
                    <td><?= $referencia->has('prospecto') ? $this->Html->link($referencia->prospecto->id, ['controller' => 'Prospectos', 'action' => 'view', $referencia->prospecto->id]) : '' ?></td>
                    <td><?= h($referencia->cargo_contacto) ?></td>
                    <td><?= h($referencia->relacion_contacto) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('Ver', ['action' => 'view', $referencia->id],['class' => 'btn btn-info btn-sm']) ?>
                        <?= $this->Html->link('Editar', ['action' => 'edit', $referencia->id],['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $referencia->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Referencia?', $referencia->id)]) ?>
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