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
                ['controller' => 'Product', 'action' => 'add', '_full' => true],
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
                __('Notifications').'<i class="fas fa-bell ml-2 mr-2"></i><span class="badge badge-danger" style="vertical-align:text-top">4</span>',
                ['controller' => 'Supplier', 'action' => 'notification', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
		</li>
	</ul>	
</div>
<?php endif; ?>
<div class="container-fluid row mx-auto mt-4">
	<div class="mx-auto col-md-12 row">
		<?php for($i=0;$i<0;$i++): ?>
		<div class="col-12 col-sm-6 col-md-4 col-lg-3 scalable mb-4">
			<div class="mx-auto row col-md-12 bg-white supplier-block rounded">
				<?= $this->Html->image('https://pngimage.net/wp-content/uploads/2018/06/heineken-beer-png-8.png', ['class'=>'p-2 img-fluid d-block mx-auto rounded', 'style' => 'object-fit: scale-down;max-height: 250px']) ?>
				<div class="mx-auto col-md-12 pb-2 border-bottom">
					<span><b>Heineken Bier</b>, 0.33 ml</span>
				</div>

				<div class="mx-auto col-md-12 row mt-3 mb-4">
					<div class="col-md-6 text-left">
						<span class="montserat-bold p-1 btn btn-light" onclick="changePrice(this)">+</span>
						<input value="1" 
								max="99" 
								min="1" 
								maxlength="2" 
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
						<a href="#" class="btn btn-dark active" role="button" aria-pressed="true">
							$<label class="m-0 p-0" data-price="0.85">0.85</label><i class="fas fa-plus ml-3"></i>
						</a>
					</div>
				</div>
				
			</div>
		</div>
		<?php endfor; ?>
		<div class="col-md-12 mx-auto text-center">
			<h4 class="text-secondary">:( The shop is <span class="text-danger font-weight-bold">empty</span> yet <button class="ml-2 btn btn-danger">FIX IT</button></h4>
			<?= $this->Html->image('empty_shop4.png', ['class'=>'p-2 img-fluid d-block mx-auto mt-4', 'style' => 'object-fit: scale-down;max-height: 250px']) ?>
		</div>
	</div>
</div>