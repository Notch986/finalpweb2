<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="products index content">
    <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Products') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('CATEGORY_ID') ?></th>
                    <th><?= $this->Paginator->sort('PROVIDER_ID') ?></th>
                    <th><?= $this->Paginator->sort('Name') ?></th>
                    <th><?= $this->Paginator->sort('Abbreviaton') ?></th>
                    <th><?= $this->Paginator->sort('Price') ?></th>
                    <th><?= $this->Paginator->sort('Status') ?></th>
                    <th><?= $this->Paginator->sort('Description') ?></th>
                    <th><?= $this->Paginator->sort('Trademark') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->ID) ?></td>
                    <td><?= $this->Number->format($product->CATEGORY_ID) ?></td>
                    <td><?= $this->Number->format($product->PROVIDER_ID) ?></td>
                    <td><?= h($product->Name) ?></td>
                    <td><?= h($product->Abbreviaton) ?></td>
                    <td><?= $this->Number->format($product->Price) ?></td>
                    <td><?= h($product->Status) ?></td>
                    <td><?= h($product->Description) ?></td>
                    <td><?= h($product->Trademark) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $product->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $product->ID)]) ?>
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
