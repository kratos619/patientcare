<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appoinment $appoinment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
         <li><?= $this->Element('actions', array('type'=>'Appoinments','typePlural'=>'Appoinments')); ?></li>
    
    </ul>
</nav>
<div class="appoinments form large-9 medium-8 columns content">
    <?= $this->Form->create($appoinment) ?>
    <fieldset>
        <legend><?= __('Edit Appoinment') ?></legend>
        <?php
            echo $this->Form->control('patient_id', ['options' => $patients]);
            echo $this->Form->control('doctor_id', ['options' => $doctors]);
            echo $this->Form->control('appoinment_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
