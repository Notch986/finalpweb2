<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($employee->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Father Surname') ?></th>
                    <td><?= h($employee->Father_surname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mother Surname') ?></th>
                    <td><?= h($employee->Mother_surname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($employee->Address) ?></td>
                </tr>
                <tr>
                    <th><?= __('E-mail') ?></th>
                    <td><?= h($employee->E-mail) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($employee->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('LOCAL ID') ?></th>
                    <td><?= $this->Number->format($employee->LOCAL_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('RUC') ?></th>
                    <td><?= $this->Number->format($employee->RUC) ?></td>
                </tr>
                <tr>
                    <th><?= __('DNI') ?></th>
                    <td><?= $this->Number->format($employee->DNI) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= $employee->Position ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $employee->Status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
