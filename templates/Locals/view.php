<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $local
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Local'), ['action' => 'edit', $local->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Local'), ['action' => 'delete', $local->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $local->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Locals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Local'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="locals view content">
            <h3><?= h($local->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($local->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($local->Description) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($local->ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
