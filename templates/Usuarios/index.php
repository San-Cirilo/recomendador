
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Usuarios</h2>
            <hr>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('perfil_id') ?></th>
                    <th><?= $this->Paginator->sort('empresa_id') ?></th>
                    <th><?= $this->Paginator->sort('nombres') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifed') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($Usuarios as $Usuario): ?>
                    <tr>
                        <td><?= $this->Number->format($Usuario->id) ?></td>
                        <td><?= $Usuario->perfile->nombre?></td>
                        <td><?= $Usuario->empresa->razon_social ?></td>
                        <td><?= h($Usuario->nombres) ?></td>
                        <td><?= h($Usuario->apellidos) ?></td>
                        <td><?= h($Usuario->email) ?></td>
                        <td><?= h($Usuario->telefono) ?></td>
                        <td><?= h($Usuario->created) ?></td>
                        <td><?= h($Usuario->modifed) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $Usuario->id],['class' => 'btn btn-info btn-sm']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $Usuario->id],['class' => 'btn btn-primary btn-sm']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $Usuario->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Pais?', $Usuario->id)]) ?>
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
