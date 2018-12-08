<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="product index large-9 medium-8 columns content">
    <h3><?= __('Product') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('productID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoryID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('supplierID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stock') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->productID) ?></td>
                <td><?= $this->Number->format($product->categoryID) ?></td>
                <td><?= $this->Number->format($product->supplierID) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>
                <td><?= $this->Number->format($product->stock) ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= h($product->description) ?></td>
                <td><?= h($product->image) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->productID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->productID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->productID], ['confirm' => __('Are you sure you want to delete # {0}?', $product->productID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
