


<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Empresas</h2>
            <hr>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('plan_id',['Plan']) ?></th>
                    <th><?= $this->Paginator->sort('razon_social') ?></th>
                    <th><?= $this->Paginator->sort('cedula') ?></th>
                    <th><?= $this->Paginator->sort('nombre_contacto') ?></th>
                    <th><?= $this->Paginator->sort('email_contacto') ?></th>
                    <th><?= $this->Paginator->sort('telefono_contacto') ?></th>
                    <th><?= $this->Paginator->sort('usuario') ?></th>
                    <th><?= $this->Paginator->sort('pais_id',['Pais']) ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('ciudad') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($empresas as $empresa): ?>
                        <tr>
                            <td><?= $this->Number->format($empresa->id) ?></td>
                            <td><?= $empresa->plane->nombre ?></td>
                            <td><?= h($empresa->razon_social) ?></td>
                            <td><?= h($empresa->cedula) ?></td>
                            <td><?= h($empresa->nombre_contacto) ?></td>
                            <td><?= h($empresa->email_contacto) ?></td>
                            <td><?= h($empresa->telefono_contacto) ?></td>
                            <td><?= h($empresa->usuario) ?></td>
                            <td><?= $empresa->paise->nombre ?></td>
                            <td><?= h($empresa->direccion) ?></td>
                            <td><?= h($empresa->ciudad) ?></td>
                            <td><?= h($empresa->telefono) ?></td>
                            <td><?= $this->Number->format($empresa->activo) ?></td>
                            <td><?= date_format($empresa->created, 'd-m-Y') ?></td>
                            <td><?= date_format($empresa->modified, 'd-m-Y') ?></td>
                            <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $empresa->id],['class' => 'btn btn-info btn-sm']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $empresa->id],['class' => 'btn btn-primary btn-sm']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $empresa->id],['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Eliminar Pais?', $empresa->id)]) ?>
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
