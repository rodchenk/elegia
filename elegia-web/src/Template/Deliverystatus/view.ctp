<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deliverystatus $deliverystatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Deliverystatus'), ['action' => 'edit', $deliverystatus->statusID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Deliverystatus'), ['action' => 'delete', $deliverystatus->statusID], ['confirm' => __('Are you sure you want to delete # {0}?', $deliverystatus->statusID)]) ?> </li>
        <li><?= $this->Html->link(__('List Deliverystatus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deliverystatus'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deliverystatus view large-9 medium-8 columns content">
    <h3><?= h($deliverystatus->statusID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($deliverystatus->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('StatusID') ?></th>
            <td><?= $this->Number->format($deliverystatus->statusID) ?></td>
        </tr>
    </table>
</div>
