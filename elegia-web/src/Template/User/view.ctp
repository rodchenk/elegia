<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->userID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->userID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->userID)]) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="user view large-9 medium-8 columns content">
    <h3><?= h($user->userID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pwd Hash') ?></th>
            <td><?= h($user->pwd_hash) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserID') ?></th>
            <td><?= $this->Number->format($user->userID) ?></td>
        </tr>
    </table>
</div>
