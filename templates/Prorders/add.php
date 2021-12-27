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
            <?= $this->Html->link(__('List Prorders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prorders form content">
            <?= $this->Form->create($prorder) ?>
            <fieldset>
                <legend><?= __('Add Prorder') ?></legend>
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
