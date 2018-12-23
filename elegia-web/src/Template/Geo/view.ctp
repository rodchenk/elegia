<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Geo $geo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Geo'), ['action' => 'edit', $geo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Geo'), ['action' => 'delete', $geo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Geo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Geo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="geo view large-9 medium-8 columns content">
    <h3><?= h($geo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($geo->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Landkreis') ?></th>
            <td><?= h($geo->landkreis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bundesland') ?></th>
            <td><?= h($geo->bundesland) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($geo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= $this->Number->format($geo->zip) ?></td>
        </tr>
    </table>
</div>
