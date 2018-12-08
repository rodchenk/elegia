<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Basket $basket
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Basket'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="basket form large-9 medium-8 columns content">
    <?= $this->Form->create($basket) ?>
    <fieldset>
        <legend><?= __('Add Basket') ?></legend>
        <?php
            echo $this->Form->control('customerID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
