<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paymentmethod $paymentmethod
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paymentmethod->paymentID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paymentmethod->paymentID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paymentmethod'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paymentmethod form large-9 medium-8 columns content">
    <?= $this->Form->create($paymentmethod) ?>
    <fieldset>
        <legend><?= __('Edit Paymentmethod') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
