<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patient $patient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Patient'), ['action' => 'edit', $patient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Patient'), ['action' => 'delete', $patient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Patients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Patient'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Appoinments'), ['controller' => 'Appoinments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appoinment'), ['controller' => 'Appoinments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoice'), ['controller' => 'Invoice', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoice', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="patients view large-9 medium-8 columns content">
    <h3><?= h($patient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($patient->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($patient->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($patient->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($patient->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($patient->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($patient->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pincode') ?></th>
            <td><?= $this->Number->format($patient->pincode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($patient->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($patient->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($patient->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Appoinments') ?></h4>
        <?php if (!empty($patient->appoinments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Patient Id') ?></th>
                <th scope="col"><?= __('Doctor Id') ?></th>
                <th scope="col"><?= __('Appoinment Date') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Modified At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($patient->appoinments as $appoinments): ?>
            <tr>
                <td><?= h($appoinments->id) ?></td>
                <td><?= h($appoinments->patient_id) ?></td>
                <td><?= h($appoinments->doctor_id) ?></td>
                <td><?= h($appoinments->appoinment_date) ?></td>
                <td><?= h($appoinments->created_at) ?></td>
                <td><?= h($appoinments->modified_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Appoinments', 'action' => 'view', $appoinments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Appoinments', 'action' => 'edit', $appoinments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appoinments', 'action' => 'delete', $appoinments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appoinments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Invoice') ?></h4>
        <?php if (!empty($patient->invoice)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Patient Id') ?></th>
                <th scope="col"><?= __('Ammount') ?></th>
                <th scope="col"><?= __('Services') ?></th>
                <th scope="col"><?= __('Duedate') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Modified At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($patient->invoice as $invoice): ?>
            <tr>
                <td><?= h($invoice->id) ?></td>
                <td><?= h($invoice->patient_id) ?></td>
                <td><?= h($invoice->ammount) ?></td>
                <td><?= h($invoice->services) ?></td>
                <td><?= h($invoice->duedate) ?></td>
                <td><?= h($invoice->created_at) ?></td>
                <td><?= h($invoice->modified_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Invoice', 'action' => 'view', $invoice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Invoice', 'action' => 'edit', $invoice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invoice', 'action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
