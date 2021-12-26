<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $locals
 */
?>
<div class="locals index content">
    <?= $this->Html->link(__('New Local'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Locals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('Name') ?></th>
                    <th><?= $this->Paginator->sort('Description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($locals as $local): ?>
                <tr>
                    <td><?= $this->Number->format($local->ID) ?></td>
                    <td><?= h($local->Name) ?></td>
                    <td><?= h($local->Description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $local->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $local->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $local->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $local->ID)]) ?>
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
