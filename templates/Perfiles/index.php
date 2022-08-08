<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Perfile[]|\Cake\Collection\CollectionInterface $perfiles
 */
?>
<div class="perfiles index content">
    <?= $this->Html->link(__('New Perfile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Perfiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($perfiles as $perfile): ?>
                <tr>
                    <td><?= $this->Number->format($perfile->id) ?></td>
                    <td><?= h($perfile->nombre) ?></td>
                    <td><?= h($perfile->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $perfile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perfile->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfile->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
