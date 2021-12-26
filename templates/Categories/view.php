<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $category
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $category->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories view content">
            <h3><?= h($category->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($category->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Abbreviation') ?></th>
                    <td><?= h($category->Abbreviation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($category->Description) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($category->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $category->Status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
