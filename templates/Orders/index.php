<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="orders index content">
    <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orders') ?></h3>
    <div class="table-responsive">
        <table class="table table-hover table-condensed table-bordered">
            <thead class="thead-light">
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('CLIENT_ID') ?></th>
                    <th><?= $this->Paginator->sort('EMPLOYEE_ID') ?></th>
                    <th><?= $this->Paginator->sort('Date') ?></th>
                    <th><?= $this->Paginator->sort('Amount') ?></th>
                    <th><?= $this->Paginator->sort('Description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Number->format($order->ID) ?></td>
                    <td><?= $this->Number->format($order->CLIENT_ID) ?></td>
                    <td><?= $this->Number->format($order->EMPLOYEE_ID) ?></td>
                    <td><?= h($order->Date) ?></td>
                    <td><?= $this->Number->format($order->Amount) ?></td>
                    <td><?= h($order->Description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $order->ID)]) ?>
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