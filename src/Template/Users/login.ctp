<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns content">
    <div class="panel">
        <h3 class="text-center">Login User</h3>
        <?= $this->Form->create();?>
        <?= $this->Form->input('email' ,array('type' => 'email'));?>
        <?= $this->Form->input('password' ,array('type' => 'Password'));?>
        <?= $this->Form->submit('Login' ,array('class' => 'button'));?>
        <?= $this->Form->end(); ?>
    </div>
</div>