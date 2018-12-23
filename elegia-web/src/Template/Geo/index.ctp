<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Geo[]|\Cake\Collection\CollectionInterface $geo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Geo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="geo index large-9 medium-8 columns content">
    <h3><?= __('Geo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('landkreis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bundesland') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($geo as $geo): ?>
            <tr>
                <td><?= $this->Number->format($geo->id) ?></td>
                <td><?= h($geo->city) ?></td>
                <td><?= $this->Number->format($geo->zip) ?></td>
                <td><?= h($geo->landkreis) ?></td>
                <td><?= h($geo->bundesland) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $geo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $geo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $geo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geo->id)]) ?>
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
