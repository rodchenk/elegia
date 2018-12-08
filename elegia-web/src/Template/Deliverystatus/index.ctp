<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deliverystatus[]|\Cake\Collection\CollectionInterface $deliverystatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Deliverystatus'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="deliverystatus index large-9 medium-8 columns content">
    <h3><?= __('Deliverystatus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('statusID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($deliverystatus as $deliverystatus): ?>
            <tr>
                <td><?= $this->Number->format($deliverystatus->statusID) ?></td>
                <td><?= h($deliverystatus->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $deliverystatus->statusID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $deliverystatus->statusID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $deliverystatus->statusID], ['confirm' => __('Are you sure you want to delete # {0}?', $deliverystatus->statusID)]) ?>
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
