<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor $doctor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Appoinments'), ['controller' => 'Appoinments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Appoinment'), ['controller' => 'Appoinments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="doctors form large-9 medium-8 columns content">
    <?= $this->Form->create($doctor) ?>
    <fieldset>
        <legend><?= __('Add Doctor') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('accepting_patients');
            echo $this->Form->control('created_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
