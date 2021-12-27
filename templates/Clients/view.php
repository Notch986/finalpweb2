<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $client->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients view content">
            <h3><?= h($client->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($client->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Father Surname') ?></th>
                    <td><?= h($client->Father_surname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mother Surname') ?></th>
                    <td><?= h($client->Mother_surname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($client->Address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($client->Phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('E-mail') ?></th>
                    <td><?= h($client->E-mail) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($client->ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
