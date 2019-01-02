<div class="col-md-12 mt-2 p-3 row m-0" style="background: linear-gradient(to right top, #d7d8f1, #f1d7db)">
	<div class="col-md-6">
		<?= $this->Html->image('supplier/rewe.jpg', ['class'=>'img-fluid d-block mx-auto rounded', 'style' => 'max-height: 40vh; mix-blend-mode: darken']) ?>
	</div>
	<div class="col-md-6 mb-2">
		<div class="col-md-12 montserat-bold text-right mt-2" style="font-size: 4rem;line-height: 3.5rem">
			<?= $supplier->name ?>
		</div>
		<div class="col-md-12 text-danger text-nowrap text-right">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="far fa-star"></i>
			<i class="far fa-star"></i>
			<span class="text-dark">3/5 (12)</span>
			<span class="ml-3 font-weight-bold text-white p-2 d-inline-block bg-dark border-radius-100"><?= $supplier->city ?></span>
		</div>
		<div class="col-md-12 mt-4 text-justify">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud xercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</div>
		<div class="col-md-12 mt-4 text-right">
			<a href="#" class="btn active border-radius-100 p-3 pl-4 pr-4 text-white border-0 opacity-block" role="button" aria-pressed="true"><i class="fas fa-heart"></i> Add to favorite</a>
		</div>
	</div>
</div>
<!-- when es die seite der bestimmten lieferanten ist -->
<?php if($supplier->supplierID == $user->userID): ?>
<div class="container-fluid mx-auto p-2 bg-dark">
	<ul class="nav nav-pills nav-fill" style="font-size: 0.9rem">
		<li class="nav-item">
			<?= $this->Html->link(
                __('Shop').'<i class="fas fa-shopping-bag ml-2"></i>',
                ['controller' => 'Supplier', 'action' => 'view', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
		</li>
		<li class="nav-item">
			<?= $this->Html->link(
                __('Edit info').'<i class="fas fa-cog ml-2"></i>',
                ['controller' => 'Supplier', 'action' => 'edit', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
		</li>
		<li class="nav-item">
			<?= $this->Html->link(
                __('Add product').'<i class="fas fa-plus ml-2"></i>',
                ['controller' => 'Product', 'action' => 'add', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
		</li>
		<li class="nav-item">
			<?= $this->Html->link(
                __('List products').'<i class="fas fa-list ml-2"></i>',
                ['controller' => 'Product', 'action' => 'overview', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white active bg-danger']
            ); ?>
		</li>
		<li class="nav-item">
			<?= $this->Html->link(
                __('Orders').'<i class="fas fa-folder-open ml-2 mr-2"></i><span class="badge badge-danger" style="vertical-align:text-top">0</span>',
                ['controller' => 'Supplier', 'action' => 'orders', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
		</li>
		<li class="nav-item">
			<?= $this->Html->link(
                __('Notifications').'<i class="fas fa-bell ml-2 mr-2"></i><span class="badge badge-danger" style="vertical-align:text-top">4</span>',
                ['controller' => 'Supplier', 'action' => 'notification', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
		</li>
	</ul>	
</div>
<?php endif; ?>
<div class="container-fluid mx-auto p-2 bg-dark">
	<table class="table table-hover table-dark" style="font-size: .9rem">
		<thead style="" class="table-dark">
		<tr class="">
			<th scope="col"></th>
			<th scope="col"><a>Image</a></th>
			<th scope="col"><?= $this->Paginator->sort('name', 			['label' => 'Name']) ?><i class="fas fa-sort ml-1 fa-sm text-secondary"></i></th>
			<th scope="col"><?= $this->Paginator->sort('categoryID', 	['label' => 'Category']) ?><i class="fas fa-sort ml-1 fa-sm text-secondary"></i></th>
			<th scope="col"><?= $this->Paginator->sort('description', 	['label' => 'Description']) ?><i class="fas fa-sort ml-1 fa-sm text-secondary"></i></th>
			<th scope="col"><?= $this->Paginator->sort('price', 		['label' => 'Price']) ?><i class="fas fa-sort ml-1 fa-sm text-secondary"></i></th>
			<th scope="col"><?= $this->Paginator->sort('stock', 		['label' => 'Amount']) ?><i class="fas fa-sort ml-1 fa-sm text-secondary"></i></th>
			<th scope="col" class="text-center"></th>
		</tr>
	</thead>
	<tbody class="table-centered">
		<?php foreach ($products as $key => $product) : ?>
			<tr>
				<th scope="row"><?= $key + 1 ?></th>
				<td><?= $product->image ?></td>
				<td><?= $product->name ?></td>
				<td><?= $product->Category['name'] ?></td>
				<td><?= $product->description ?></td>
				<td>$<?= $product->price ?></td>
				<td><?= $product->stock ?></td>
				<td class="text-center">
					<?= $this->Html->link(
		                '<i class="fas fa-cog fa-md m-3"></i>',
		                ['controller' => 'Product', 'action' => 'edit', $product->productID, '_full' => true],
		                ['escape' => false, 'class' => 'btn text-warning']
		            ); ?>
				</td>
			</tr>
		<?php endforeach; ?>

		</tbody>
	</table>
	<div class="col-md-12 text-center pb-3">
		<div class="paginator">
			<ul class="pagination">
			    <?= $this->Paginator->first('<< ' . __('first')) ?>
			    <?= $this->Paginator->prev('< ' . __('previous')) ?>
			    <?= $this->Paginator->numbers() ?>
			    <?= $this->Paginator->next(__('next') . ' >') ?>
			    <?= $this->Paginator->last(__('last') . ' >>') ?>
			</ul>
		</div>
	</div>
</div>