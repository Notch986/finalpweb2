<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<div class="employees index content">
    <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('LOCAL_ID') ?></th>
                    <th><?= $this->Paginator->sort('Name') ?></th>
                    <th><?= $this->Paginator->sort('Father_surname') ?></th>
                    <th><?= $this->Paginator->sort('Mother_surname') ?></th>
                    <th><?= $this->Paginator->sort('Position') ?></th>
                    <th><?= $this->Paginator->sort('Status') ?></th>
                    <th><?= $this->Paginator->sort('Address') ?></th>
                    <th><?= $this->Paginator->sort('RUC') ?></th>
                    <th><?= $this->Paginator->sort('DNI') ?></th>
                    <th><?= $this->Paginator->sort('E-mail') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $this->Number->format($employee->ID) ?></td>
                    <td><?= $this->Number->format($employee->LOCAL_ID) ?></td>
                    <td><?= h($employee->Name) ?></td>
                    <td><?= h($employee->Father_surname) ?></td>
                    <td><?= h($employee->Mother_surname) ?></td>
                    <td><?= h($employee->Position) ?></td>
                    <td><?= h($employee->Status) ?></td>
                    <td><?= h($employee->Address) ?></td>
                    <td><?= $this->Number->format($employee->RUC) ?></td>
                    <td><?= $this->Number->format($employee->DNI) ?></td>
                    <td><?= h($employee->E-mail) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employee->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->ID)]) ?>
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
