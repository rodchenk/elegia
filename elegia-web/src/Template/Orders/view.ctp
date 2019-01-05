<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->orderID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->orderID], ['confirm' => __('Are you sure you want to delete # {0}?', $order->orderID)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->orderID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($order->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OrderID') ?></th>
            <td><?= $this->Number->format($order->orderID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CustomerID') ?></th>
            <td><?= $this->Number->format($order->customerID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ProductID') ?></th>
            <td><?= $this->Number->format($order->productID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($order->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($order->updated) ?></td>
        </tr>
    </table>
</div>
