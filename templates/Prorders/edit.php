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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prorder->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prorder->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Prorders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prorders form content">
            <?= $this->Form->create($prorder) ?>
            <fieldset>
                <legend><?= __('Edit Prorder') ?></legend>
                <?php
                    echo $this->Form->control('PRODUCT_ID');
                    echo $this->Form->control('ORDER_ID');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
