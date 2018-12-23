<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Geo $geo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Geo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="geo form large-9 medium-8 columns content">
    <?= $this->Form->create($geo) ?>
    <fieldset>
        <legend><?= __('Add Geo') ?></legend>
        <?php
            echo $this->Form->control('city');
            echo $this->Form->control('zip');
            echo $this->Form->control('landkreis');
            echo $this->Form->control('bundesland');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
