
<div class="container-fluid mx-auto p-3 pt-4 row mt-2" style="background: linear-gradient(to right top, #dae0e6, #e6dade);">
	<div class="col-12 col-md-7 col-lg-3 mb-3">
		<div class="list-group">
			<?= $this->Html->link(
                __('Public profile').'<i class="far fa-user float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'view', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action active bg-dark border-dark']
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
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
		</div>
	</div>
	<div class="col-12 col-sm-12 col-md-6 col-lg-6">
		<div class="col-md-12">
			<h3 class="montserat-bold text-dark"><?= $customer->name ?></h3>
		</div>
		<div class="col-md-12">
			<span><?=__('Kunde seit').' '.date('d.F, Y', strtotime($customer->user['created']))?></span>
		</div>
		<div class="col-md-12 mt-1">
			<kbd class="p-2 bg-dark"><?= $customer->user->email ?></kbd>
		</div>
		<div class="col-md-12 mt-4">
			<div class="col-md-12 pl-0">
				<div class="input-group mb-3">
						<div class="input-group-prepend">
						<span class="input-group-text text-white bg-danger border-danger" id="basic-addon3" style="width: 120px"><i class="fas fa-city mr-3"></i><?= __('City') ?></span>
						</div>
						<input type="text" class="form-control bg-white" value="<?= $customer->city ?>" readonly>
						<input type="text" class="form-control bg-white col-md-3 text-center" value="<?= $plz==null?'':$plz->zip ?>" readonly>
				</div>
			</div>

			<div class="col-md-12 pl-0">
				<div class="input-group mb-3">
						<div class="input-group-prepend">
						<span class="input-group-text text-white bg-danger border-danger" id="basic-addon3" style="width: 120px"><i class="fas fa-home mr-3"></i></i><?= __('Address') ?></span>
						</div>
						<input type="text" class="form-control bg-white col-md-10" value="<?= $customer->street ?>" readonly>
						<input type="text" class="form-control bg-white col-md-2 text-center" value="<?= $customer->house_nr ?>" readonly>
				</div>
			</div>

		</div>
	</div>
	<div class="col-12 col-sm-12 col-md-6 col-lg-3">
		<?php if(!empty($customer->image)): ?>
		<?= $this->Html->image('upload/u/'.$customer->image, 
			['class'=>'p-2 img-fluid d-block mx-auto rounded', 'style' => 'object-fit: scale-down;max-height: 250px']) ?> 
		<?php else: ?>
			<div class="name-badge text-white mx-auto p-5 text-center">
				<span><?= $customer->name[0] ?></span>
			</div>
		<?php endif; ?>
	</div>
</div>
<div class="container-fluid row mx-auto">
	<div class="col-md-12 mx-auto mt-4">
		<h3 class="text-center text-secondary mb-2"><?= __('Find. Buy. Enjoy.') ?>
			 <?= $this->Html->link(
                __("Let's go").' <i class="fas fa-search"></i>',
                ['controller' => 'Search', 'action' => 'index', '_full' => true],
                ['escape' => false, 'class' => 'ml-2 btn btn-warning pl-3 pr-3']
            ); ?>
		</h3>
		<?= $this->Html->image('shopping_cart.png', ['class'=>'p-2 img-fluid d-block mx-auto mb-4', 'style' => 'object-fit: scale-down;max-height: 350px']) ?>
	</div>
</div>