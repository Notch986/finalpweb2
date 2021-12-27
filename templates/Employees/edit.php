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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employee->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employee->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees form content">
            <?= $this->Form->create($employee) ?>
            <fieldset>
                <legend><?= __('Edit Employee') ?></legend>
                <?php
                    echo $this->Form->control('LOCAL_ID');
                    echo $this->Form->control('Name');
                    echo $this->Form->control('Father_surname');
                    echo $this->Form->control('Mother_surname');
                    echo $this->Form->control('Position');
                    echo $this->Form->control('Status');
                    echo $this->Form->control('Address');
                    echo $this->Form->control('RUC');
                    echo $this->Form->control('DNI');
                    echo $this->Form->control('E-mail');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
