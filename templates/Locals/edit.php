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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $local->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $local->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Locals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="locals form content">
            <?= $this->Form->create($local) ?>
            <fieldset>
                <legend><?= __('Edit Local') ?></legend>
                <?php
                    echo $this->Form->control('Name');
                    echo $this->Form->control('Description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
