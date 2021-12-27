<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $prorders
 */
?>
<div class="prorders index content">
    <?= $this->Html->link(__('New Prorder'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Prorders') ?></h3>
    <div class="table-responsive">
        <table class="table table-hover table-condensed table-bordered">
            <thead class="thead-light">
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('PRODUCT_ID') ?></th>
                    <th><?= $this->Paginator->sort('ORDER_ID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prorders as $prorder): ?>
                <tr>
                    <td><?= $this->Number->format($prorder->ID) ?></td>
                    <td><?= $this->Number->format($prorder->PRODUCT_ID) ?></td>
                    <td><?= $this->Number->format($prorder->ORDER_ID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $prorder->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prorder->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prorder->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $prorder->ID)]) ?>
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
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
        </p>
    </div>
</div>