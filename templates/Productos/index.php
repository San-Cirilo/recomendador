

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Productos</h2>
            <hr>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('empresa_id') ?></th>
                    <th><?= $this->Paginator->sort('tiposervicio_id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('precio_promedio') ?></th>
                    <th><?= $this->Paginator->sort('modelo_servicio') ?></th>
                    <th><?= $this->Paginator->sort('created',['Creado']) ?></th>
                    <th><?= $this->Paginator->sort('modified',['Modificado']) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->id) ?></td>
                    <td><?= $producto->has('empresa') ? $this->Html->link($producto->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $producto->empresa->id]) : '' ?></td>
                    <td><?= $producto->has('tiposervicio') ? $this->Html->link($producto->tiposervicio->id, ['controller' => 'Tiposervicios', 'action' => 'view', $producto->tiposervicio->id]) : '' ?></td>
                    <td><?= h($producto->nombre) ?></td>
                    <td><?= $this->Number->format($producto->precio_promedio) ?></td>
                    <td><?= h($producto->modelo_servicio) ?></td>
                    <td><?= h($producto->created) ?></td>
                    <td><?= h($producto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('Ver', ['action' => 'view', $producto->id],['class' => 'btn btn-info btn-sm']) ?>
                        <?= $this->Html->link('Editar', ['action' => 'edit', $producto->id],['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $producto->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Producto?', $producto->id)]) ?>
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
