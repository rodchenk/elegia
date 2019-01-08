<div class="mb-3 container-fluid mx-auto p-3 pt-4 pb-4 row mt-2" style="background-color: #303031; min-height: calc(100vh - 55px)">
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
                ['escape' => false, 'class' => 'list-group-item list-group-item-action active bg-dark border-dark']
            ); ?>
            <?= $this->Html->link(
                __('History').'<i class="fas fa-history float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'history', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
		</div>
	</div>
	<div class="col-12 col-sm-12 col-md-12 col-lg-9 text-white">
		<?php $sum = 0; ?>
		<?php if(iterator_count($orders)): ?>
		<div class="col-md-12">
			<h4 class="p-2 text-left text-warning"><?= __('Hier are all products from your shopping cart') ?></h4>
		</div>
		<table class="table table-hover" style="font-size: .9rem">
			<tbody class="table-centered">
				<?php foreach ($orders as $order) : ?>
					<tr>
						<td class="border-0">
							<?= $this->Html->image('upload/p/'.$order->Product['image'], ['class'=>'p-2 img-fluid ', 'style' => 'object-fit: scale-down;max-height: 80px']) ?>
						</td>
						<td class="border-0"><?= $order->Product['name'] ?>, <?= $order->Product['description'] ?></td>
						<td class="border-0"><?= $order->amount ?> Stk.</td>
						<td class="border-0">€<?= $order->Product['price'] ?></td>
						<td class="border-0">Added at <span class="text-info"><?= date( 'd. F H:i', strtotime($order->updated)); ?></span></td>
						<td class="border-0 text-right" style="width: 80px">
							<?= $this->Form->postLink(
	                            '<i class="fas fa-times fa-lg m-3"></i>',
	                            ['controller' => 'Orders', 
	                            'action' => 'delete', 
	                            $order->orderID, 
	                            $customer->customerID,
	                             '_full' => true],
	                            ['escape' => false, 
	                            'class' => 'text-danger', 
	                            'data-toggle' => 'tooltip', 
	                            'data-placement' => 'top', 
	                            'title' => 'Remove',
	                        	'confirm' => __('Are you sure you want to delete')]
	                        ); ?>
						</td>
					</tr>
				<?php $sum+=$order->Product['price']*$order->amount ?>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="col-md-12 text-right">
			<?= $this->Form->postLink(
                'Buy for <b>€<span>'.$sum.'</span></b>',
                ['controller' => 'Orders', 
                'action' => 'buy', 
                $customer->customerID,
                 '_full' => true],
                ['escape' => false, 
                'class' => 'btn btn-warning pl-3 pr-3',
            	'confirm' => __('Are you sure you want to buy?')]
            ); ?>
		</div>
		<?php else: ?>
			<div class="col-md-12 text-center">
				<?= $this->Html->image('empty_cart.png', ['class'=>'p-2 img-fluid', 'style' => 'object-fit: scale-down;max-height: 250px']) ?>
				<h4 class="p-2 text-center text-info">
					You do not have anything in you cart
				</h4>
				<?= $this->Html->link(
	                'Go shopping',
	                ['controller' => 'Search', 
	                'action' => 'index'],[
	                 '_full' => true, 
	                 'escape' => false, 
	                'class' => 'btn btn-info pl-3 pr-3']
	            ); ?>
			</div>
		<?php endif; ?>
	</div>
</div>