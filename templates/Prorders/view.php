<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $prorder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Prorder'), ['action' => 'edit', $prorder->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Prorder'), ['action' => 'delete', $prorder->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $prorder->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Prorders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Prorder'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prorders view content">
            <h3><?= h($prorder->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($prorder->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('PRODUCT ID') ?></th>
                    <td><?= $this->Number->format($prorder->PRODUCT_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORDER ID') ?></th>
                    <td><?= $this->Number->format($prorder->ORDER_ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
