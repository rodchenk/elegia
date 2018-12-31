<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style']) ?>
</head>
<body class="bg-light">
	<main class="mb-3">
		<div class="container-fluid mx-auto p-3 pt-4 pb-4 row mt-2" style="background-color: #303031; min-height: calc(100vh - 55px)">
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
				<div class="col-md-12">
					<h4 class="p-2 text-left text-warning">Rewe</h4>
				</div>
				<table class="table table-hover table-dark" style="font-size: .9rem">
		  			<thead style="display: none">
						<tr class="">
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody class="table-centered">
						<tr>
							<th scope="row">1</th>
							<td>
								<?= $this->Html->image('https://pngimage.net/wp-content/uploads/2018/06/heineken-beer-png-8.png', ['class'=>'p-2 img-fluid ', 'style' => 'object-fit: scale-down;max-height: 80px']) ?>
							</td>
							<td>Heineken Bier, 0.33ml</td>
							<td>15 Stk.</td>
							<td>$0.85</td>
							<td class="text-right"><a href="" class="btn text-danger"><i class="fas fa-times fa-lg m-3"></i></a></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>
								<?= $this->Html->image('http://www.antiquetobacco.com/wp-content/uploads/2012/11/lucky-strike-5.png', ['class'=>'p-2 img-fluid ', 'style' => 'object-fit: scale-down;max-height: 80px']) ?>
							</td>
							<td>Lucky Strike, 20 Cig.</td>
							<td>1 Stk.</td>
							<td>$2.5</td>
							<td class="text-right"><a href="" class="btn text-danger"><i class="fas fa-times fa-lg m-3"></i></a></td>
					</tbody>
				</table>
				<div class="col-md-12 text-right">
					<a href="#" class="btn btn-warning active pl-3 pr-3" role="button" aria-pressed="true">Buy for <b>$<span>17.5</span></b></a>
				</div>

				<div class="col-md-12">
					<h4 class="p-2 text-left text-warning">Lidl</h4>
				</div>
				<table class="table table-hover table-dark" style="font-size: .9rem">
		  			<thead style="display: none">
						<tr class="">
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody class="table-centered">
						<tr>
							<th scope="row">1</th>
							<td>
								<?= $this->Html->image('https://pngimage.net/wp-content/uploads/2018/06/heineken-beer-png-8.png', ['class'=>'p-2 img-fluid ', 'style' => 'object-fit: scale-down;max-height: 80px']) ?>
							</td>
							<td>Heineken Bier, 0.33ml</td>
							<td>15 Stk.</td>
							<td>$0.85</td>
							<td class="text-right"><a href="" class="btn text-danger"><i class="fas fa-times fa-lg m-3"></i></a></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>
								<?= $this->Html->image('http://www.antiquetobacco.com/wp-content/uploads/2012/11/lucky-strike-5.png', ['class'=>'p-2 img-fluid ', 'style' => 'object-fit: scale-down;max-height: 80px']) ?>
							</td>
							<td>Lucky Strike, 20 Cig.</td>
							<td>1 Stk.</td>
							<td>$2.5</td>
							<td class="text-right"><a href="" class="btn text-danger"><i class="fas fa-times fa-lg m-3"></i></a></td>
					</tbody>
				</table>
				<div class="col-md-12 text-right">
					<a href="#" class="btn btn-warning active pl-3 pr-3" role="button" aria-pressed="true">Buy for <b>$<span>17.5</span></b></a>
				</div>

			</div>
		</div>
		<div class="container-fluid row mx-auto">
			


		</div>
	</main>
</body>
</html>