<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<div class="clients index content">
    <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clients') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('Name') ?></th>
                    <th><?= $this->Paginator->sort('Father_surname') ?></th>
                    <th><?= $this->Paginator->sort('Mother_surname') ?></th>
                    <th><?= $this->Paginator->sort('Address') ?></th>
                    <th><?= $this->Paginator->sort('Phone') ?></th>
                    <th><?= $this->Paginator->sort('E-mail') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= $this->Number->format($client->ID) ?></td>
                    <td><?= h($client->Name) ?></td>
                    <td><?= h($client->Father_surname) ?></td>
                    <td><?= h($client->Mother_surname) ?></td>
                    <td><?= h($client->Address) ?></td>
                    <td><?= h($client->Phone) ?></td>
                    <td><?= h($client->E-mail) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $client->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $client->ID)]) ?>
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
