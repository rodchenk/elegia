<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style']) ?>
</head>
<body class="bg-light">
	<main>
		<div class="container-fluid mx-auto p-3 pt-4 row" style="background-color: #dae0e6;">
			<div class="col-md-3">
				<div class="list-group">
					<?= $this->Html->link(
                        'Profile<i class="far fa-user float-right p-1"></i>',
                        ['controller' => 'Customer', 'action' => 'view', $user->userID, '_full' => true],
                        ['escape' => false, 'class' => 'list-group-item list-group-item-action active']
                    ); ?>
                    <?= $this->Html->link(
                        'Edit profile<i class="fas fa-cog float-right p-1"></i>',
                        ['controller' => 'Customer', 'action' => 'edit', $user->userID, '_full' => true],
                        ['escape' => false, 'class' => 'list-group-item list-group-item-action']
                    ); ?>
                    <?= $this->Html->link(
                        'Shopping cart<i class="fas fa-shopping-basket float-right p-1"></i>',
                        ['controller' => 'Customer', 'action' => 'cart', $user->userID, '_full' => true],
                        ['escape' => false, 'class' => 'list-group-item list-group-item-action']
                    ); ?>
                    <?= $this->Html->link(
                        'History<i class="fas fa-history float-right p-1"></i>',
                        ['controller' => 'Customer', 'action' => 'history', $user->userID, '_full' => true],
                        ['escape' => false, 'class' => 'list-group-item list-group-item-action']
                    ); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12">
					<h3 class="montserat-bold text-dark"><?= $customer->name ?></h3>
				</div>
				<div class="col-md-12">
					<span>Kunde seit <?= date('d.F, Y', strtotime($user->created))?></span>
				</div>
				<div class="col-md-12 mt-1">
					<kbd class="p-2 bg-dark"><?= $user->email ?></kbd>
				</div>
				<div class="col-md-12 mt-4">
					<div class="col-md-12 pl-0">
						<div class="input-group mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text text-white bg-coral" id="basic-addon3" style="width: 120px"><i class="fas fa-city mr-3"></i>City</span>
  							</div>
  							<input type="text" class="form-control bg-white" value="<?= $customer->city ?>" readonly>
  							<input type="text" class="form-control bg-white col-md-3 text-center" value="14770" readonly>
						</div>
					</div>

					<div class="col-md-12 pl-0">
						<div class="input-group mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text text-white bg-coral" id="basic-addon3" style="width: 120px"><i class="fas fa-home mr-3"></i></i>Address</span>
  							</div>
  							<input type="text" class="form-control bg-white col-md-10" value="<?= $customer->street ?>Zander street" readonly>
  							<input type="text" class="form-control bg-white col-md-2 text-center" value="<?= $customer->house_nr ?>10G" readonly>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-3">
				<?= $this->Html->image('customer/31.jpg', 
					['class'=>'p-2 img-fluid d-block float-right mt-4 mb-4 rounded', 'style' => 'object-fit: scale-down;max-height: 250px']) ?>
			</div>
		</div>
		<div class="container-fluid row mx-auto">
			<div class="col-md-12 mx-auto mt-4">
				<h3 class="text-center text-secondary"><?= __('Find. Buy. Enjoy.') ?>
					 <?= $this->Html->link(
                        __("Let's go").' <i class="fas fa-search"></i>',
                        ['controller' => 'Search', 'action' => 'index', '_full' => true],
                        ['escape' => false, 'class' => 'ml-2 btn btn-danger pl-3 pr-3']
                    ); ?>
				</h3>
				<?= $this->Html->image('shopping_cart.png', ['class'=>'p-2 img-fluid d-block mx-auto mb-4', 'style' => 'object-fit: scale-down;max-height: 350px']) ?>
			</div>
		</div>
	</main>
</body>
</html>