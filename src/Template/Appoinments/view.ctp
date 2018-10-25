<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appoinment $appoinment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Appoinment'), ['action' => 'edit', $appoinment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Appoinment'), ['action' => 'delete', $appoinment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appoinment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Appoinments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appoinment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Patients'), ['controller' => 'Patients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Patient'), ['controller' => 'Patients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="appoinments view large-9 medium-8 columns content">
    <h3><?= h($appoinment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Patient') ?></th>
            <td><?= $appoinment->has('patient') ? $this->Html->link($appoinment->patient->name, ['controller' => 'Patients', 'action' => 'view', $appoinment->patient->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doctor') ?></th>
            <td><?= $appoinment->has('doctor') ? $this->Html->link($appoinment->doctor->name, ['controller' => 'Doctors', 'action' => 'view', $appoinment->doctor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($appoinment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Appoinment Date') ?></th>
            <td><?= h($appoinment->appoinment_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($appoinment->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified At') ?></th>
            <td><?= h($appoinment->modified_at) ?></td>
        </tr>
    </table>
</div>
