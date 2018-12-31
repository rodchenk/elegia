<div class="mb-3 container-fluid mx-auto p-3 pt-4 pb-4 row mt-2" style="background-color: #17132b">
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
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
            <?= $this->Html->link(
                __('Shopping cart').'<i class="fas fa-shopping-basket float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'cart', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
            <?= $this->Html->link(
                __('History').'<i class="fas fa-history float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'history', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action active bg-dark border-dark']
            ); ?>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 text-dark">
        <div class="col-md-12 text-light">
            <?= $this->Html->image('empty_cart.png', ['class'=>'p-2 img-fluid d-block mx-auto mt-4', 'style' => 'object-fit: scale-down;max-height: 250px']) ?>
            <h3 class="text-center mb-0" style="color: #ee446d">No history yet :(</h3>
            <h5 class="text-center">Buy something to make me happy</h5>
        </div>
    </div>
</div>