<?= $this->element('SupplierHeader') ?>
<!-- when es die seite der bestimmten lieferanten ist -->
<?php if($supplier->supplierID == $user->userID): ?>
<div class="container-fluid mx-auto p-2 mb-2 bg-dark">
	<ul class="nav nav-pills nav-fill" style="font-size: 0.9rem">
		<li class="nav-item">
			<?= $this->Html->link(
                __('Shop').'<i class="fas fa-shopping-bag ml-2"></i>',
                ['controller' => 'Supplier', 'action' => 'view', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white active bg-danger']
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
                ['escape' => false, 'class' => 'nav-link text-white']
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
<div class="container-fluid row mx-auto mt-4">
	<div class="mx-auto col-md-12 row">
		<?php if(iterator_count($products)): ?>
			<?php foreach($products as $product): ?>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 scalable mb-4">
				<div class="mx-auto row col-md-12 bg-white supplier-block rounded">
					<?= $this->Html->image('upload/p/'.$product->image, ['class'=>'p-2 img-fluid d-block mx-auto rounded', 'style' => 'object-fit: scale-down;max-height: 250px']) ?>
					<div class="mx-auto col-md-12 pb-2 border-bottom">
						<span><b><?= $product->name ?></b>, <?= $product->description ?></span>
					</div>
					<div class="mx-auto col-md-12 row mt-3 mb-4 p-0">
						<?= $this->Form->create('Orders', [
							'url' => [
								'controller' => 'Orders', 
								'action' => 'add', 
								$user->userID, 
								$product->productID,
								$supplier->supplierID], 
							'class' => 'mx-auto row', 
							'style' => 'width: 100%']
						)?>
							<div class="col-md-6 text-left">
								<span class="montserat-bold p-1 btn btn-light" onclick="changePrice(this)">+</span>
								<input value="1" 
										max="99" 
										min="1" 
										maxlength="2" 
										name="amount" 
										name="product-count" 
										class="p-1 rounded text-center border" 
										style="width: 40px;" 
										readonly>
								<span class="montserat-bold p-1 btn btn-light" onclick="changePrice(this)">-</span>
							</div>
							<script type="text/javascript">
								function changePrice(e){var t=e.parentNode.getElementsByTagName("input")[0].value,a=e.parentNode.parentNode.getElementsByTagName("label")[0].getAttribute("data-price");if("+"===e.innerHTML){if(t>99)return;e.parentNode.getElementsByTagName("input")[0].value++}else{if(t<=1)return;e.parentNode.getElementsByTagName("input")[0].value--}e.parentNode.parentNode.getElementsByTagName("label")[0].innerHTML=(a*e.parentNode.getElementsByTagName("input")[0].value).toFixed(2)}
							</script>
							<div class="col-md-6 text-right p-0">
								<?= $this->Form->button(
					                '$<label class="m-0 p-0" data-price="'.$product->price.'">'.$product->price.'</label><i class="fas fa-plus ml-3"></i>',
					                ['escape' => false, 
					                'class' => 'btn btn-dark', 
					                'role' => 'button']
					            ); ?>
							</div>
						<?= $this->Form->end() ?>
					</div>
					
				</div>
			</div>
			<?php endforeach; ?>
		<?php else: ?>
		<div class="col-md-12 mx-auto text-center">
			<h4 class="text-secondary">:( The shop is <span class="text-danger font-weight-bold">empty</span> yet <button class="ml-2 btn btn-danger">FIX IT</button></h4>
			<?= $this->Html->image('empty_shop4.png', ['class'=>'p-2 img-fluid d-block mx-auto mt-4', 'style' => 'object-fit: scale-down;max-height: 250px']) ?>
		</div>
		<?php endif; ?>
	</div>
</div>