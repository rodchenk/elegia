<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deliverystatus $deliverystatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $deliverystatus->statusID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $deliverystatus->statusID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Deliverystatus'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="deliverystatus form large-9 medium-8 columns content">
    <?= $this->Form->create($deliverystatus) ?>
    <fieldset>
        <legend><?= __('Edit Deliverystatus') ?></legend>
        <?php
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
