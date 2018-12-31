<div class="mb-3 container-fluid mx-auto p-3 pt-4 pb-4 row mt-2" style="background-color: #e5dfef;">
    <div class="col-12 col-md-7 col-lg-3 mb-3">
        <div class="list-group">
            <?= $this->Html->link(
                __('Public profile').'<i class="far fa-user float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'view', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
            <?= $this->Html->link(
                __('Edit profile').'<i class="fas fa-cog float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'edit', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action active bg-dark border-dark']
            ); ?>
            <?= $this->Html->link(
                __('Shopping cart').'<i class="fas fa-shopping-basket float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'cart', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
            <?= $this->Html->link(
                __('History').'<i class="fas fa-history float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'history', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 text-dark">
        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ul class="side-nav">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $customer->customerID],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $customer->customerID)]
                    )
                ?></li>
                <li><?= $this->Html->link(__('List Customer'), ['action' => 'index']) ?></li>
            </ul>
        </nav>
        <div class="customer form large-9 medium-8 columns content">
            <?= $this->Form->create($customer) ?>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('city');
                    echo $this->Form->control('street');
                    echo $this->Form->control('house_nr');
                    echo $this->Form->control('description');
                    echo $this->Form->control('image');
                ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>