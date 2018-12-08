<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paymentmethod $paymentmethod
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paymentmethod'), ['action' => 'edit', $paymentmethod->paymentID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paymentmethod'), ['action' => 'delete', $paymentmethod->paymentID], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentmethod->paymentID)]) ?> </li>
        <li><?= $this->Html->link(__('List Paymentmethod'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paymentmethod'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paymentmethod view large-9 medium-8 columns content">
    <h3><?= h($paymentmethod->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($paymentmethod->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PaymentID') ?></th>
            <td><?= $this->Number->format($paymentmethod->paymentID) ?></td>
        </tr>
    </table>
</div>
