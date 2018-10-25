<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Element('actions', array('type'=>'Invoice','typePlural'=>'Invoice')); ?></li>
    </ul>
</nav>
<div class="invoice form large-9 medium-8 columns content">
    <?= $this->Form->create($invoice) ?>
    <fieldset>
        <legend><?= __('Add Invoice') ?></legend>
        <?php
            echo $this->Form->control('patient_id', ['options' => $patients]);
            echo $this->Form->control('ammount');
            echo $this->Form->control('services');
            echo $this->Form->control('duedate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
