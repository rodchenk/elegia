<?= $this->element('SupplierHeader') ?>
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
                __('Notifications').'<i class="fas fa-bell ml-2 mr-2"></i><span class="badge badge-danger" style="vertical-align:text-top">'.$notification.'</span>',
                ['controller' => 'Supplier', 'action' => 'notification', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
		</li>
	</ul>	
</div>
<?php endif; ?>
<div class="container-fluid mx-auto p-2 bg-dark">
	<table class="table table-hover table-dark" style="font-size: .9rem">
		<thead>
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
		<?php if(sizeof($products) > 0): ?>
			<tbody class="table-centered">
				<?php foreach ($products as $key => $product) : ?>
					<tr>
						<th scope="row"><?= $key + 1 ?></th>
						<td>
							<?= $this->Html->image('upload/p/'.$product->image, ['class'=>'img-fluid ', 'style' => 'object-fit: scale-down;max-height: 80px']) ?>
						</td>
						<td><?= $product->name ?></td>
						<td><?= $product->Category['name'] ?></td>
						<td>
							<?= $product->description ?>		
						</td>
						<td>$<?= $product->price ?></td>
						<td class="text-center" style="width: 100px"><?= $product->stock ?></td>
						<td class="text-right" style="width:185px">
							<?= $this->Html->link(
				                '<i class="fas fa-cog fa-md m-3"></i>',
				                ['controller' => 'Product', 
				                'action' => 'edit', 
				                $supplier->supplierID,
				                $product->productID, 
				                '_full' => true],
				                ['escape' => false, 
				                'class' => 'btn text-warning',  
				                'data-toggle' => 'tooltip', 
				                'data-placement' => 'top', 
				                'title' => 'Edit']
				            ); ?>
				            <?= $this->Form->postLink(
				                '<i class="fas fa-times fa-lg m-3"></i>',
				                ['controller' => 'Product', 
				                'action' => 'delete',
				                $supplier->supplierID, 
				                $product->productID, 
				                '_full' => true],
				                ['escape' => false, 
				                'class' => 'btn text-danger',  
				                'data-toggle' => 'tooltip', 
				                'data-placement' => 'top', 
				                'title' => 'Remove']
				            ); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		<?php else: $flag = true; endif; ?>
	</table>
	<?php if(sizeof($products) <= 0): ?>
		<div class="text-center"><span class="text-center text-secondary montserat-bold" style="font-size: 2rem">No products yet :( </span>
			<?= $this->Html->link(
                __('Add').'<i class="fas fa-plus ml-2"></i>',
                ['controller' => 'Product', 'action' => 'add', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'btn btn-warning ml-2', 'style' => 'vertical-align: super']
            ); ?>
      	</div>
	<?php endif; ?>
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