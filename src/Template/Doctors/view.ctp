<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor $doctor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Doctor'), ['action' => 'edit', $doctor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Doctor'), ['action' => 'delete', $doctor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Doctors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doctor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Appoinments'), ['controller' => 'Appoinments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appoinment'), ['controller' => 'Appoinments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="doctors view large-9 medium-8 columns content">
    <h3><?= h($doctor->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($doctor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($doctor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accepting Patients') ?></th>
            <td><?= $this->Number->format($doctor->accepting_patients) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($doctor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($doctor->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Appoinments') ?></h4>
        <?php if (!empty($doctor->appoinments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Patient Name') ?></th>
                
                <th scope="col"><?= __('Appoinment Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($doctor->appoinments as $appoinments): ?>
            <tr>
                <td><?= h($appoinments->id) ?></td>
                <td><?= $this->Format->getName($appoinments->patient_id,'patients') ?></td>
                <td><?= h($appoinments->appoinment_date) ?></td>
                <td><?= h($appoinments->created) ?></td>
                <td><?= h($appoinments->modified) ?></td>
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
</div>
