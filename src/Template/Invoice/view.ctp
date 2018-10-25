<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoice'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Patients'), ['controller' => 'Patients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Patient'), ['controller' => 'Patients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invoice view large-9 medium-8 columns content">
    <h3><?= h($invoice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Patient') ?></th>
            <td><?= $invoice->has('patient') ? $this->Html->link($invoice->patient->name, ['controller' => 'Patients', 'action' => 'view', $invoice->patient->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Services') ?></th>
            <td><?= h($invoice->services) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ammount') ?></th>
            <td><?= $this->Number->format($invoice->ammount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duedate') ?></th>
            <td><?= h($invoice->duedate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($invoice->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified At') ?></th>
            <td><?= h($invoice->modified_at) ?></td>
        </tr>
    </table>
</div>
