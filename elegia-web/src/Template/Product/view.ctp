<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->productID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->productID], ['confirm' => __('Are you sure you want to delete # {0}?', $product->productID)]) ?> </li>
        <li><?= $this->Html->link(__('List Product'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="product view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($product->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($product->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ProductID') ?></th>
            <td><?= $this->Number->format($product->productID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CategoryID') ?></th>
            <td><?= $this->Number->format($product->categoryID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SupplierID') ?></th>
            <td><?= $this->Number->format($product->supplierID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stock') ?></th>
            <td><?= $this->Number->format($product->stock) ?></td>
        </tr>
    </table>
</div>
