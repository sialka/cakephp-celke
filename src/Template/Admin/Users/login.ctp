<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-12 medium-12 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Logar')) ?>
    <?= $this->Form->end() ?>
</div>
