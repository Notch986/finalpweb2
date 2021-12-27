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
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Add Client') ?></legend>
                <?php
                    echo $this->Form->control('Name');
                    echo $this->Form->control('Father_surname');
                    echo $this->Form->control('Mother_surname');
                    echo $this->Form->control('Address');
                    echo $this->Form->control('Phone');
                    echo $this->Form->control('E-mail');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
