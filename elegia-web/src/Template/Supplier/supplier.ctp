<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style']) ?>
</head>
<body class="bg-light">
	<main>
		<div class="col-md-12 mt-2 p-3 row m-0" style="background-color: #d7e0f1">
			<div class="col-md-6">
				<?= $this->Html->image('supplier/bio.png', ['class'=>'img-fluid d-block mx-auto rounded', 'style' => 'max-height: 40vh']) ?>
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
		<div class="container-fluid row mx-auto mt-4">
			<div class="mx-auto col-md-12 row">
				<?php for($i=0;$i<9;$i++): ?>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 scalable mb-4">
					<div class="mx-auto row col-md-12 bg-white supplier-block rounded">
						<?= $this->Html->image('https://pngimage.net/wp-content/uploads/2018/06/heineken-beer-png-8.png', ['class'=>'p-2 img-fluid d-block mx-auto rounded', 'style' => 'object-fit: scale-down;max-height: 250px']) ?>
						<div class="mx-auto col-md-12">
							<span>Heineken Bier, 0.33 ml</span>
						</div>

						<div class="mx-auto col-md-12 row mt-3 mb-4">
							<div class="col-md-5 text-left">
								<span class="montserat-bold p-1">+</span>
								<input value="1" name="product-count" class="p-1 rounded text-center border" style="width: 40px;" readonly>
								<span class="montserat-bold p-1">-</span>
							</div>
							<div class="col-md-7 text-right p-0">
								<a href="#" class="btn btn-dark active" role="button" aria-pressed="true">0.85$<i class="fas fa-plus ml-3"></i></a>
							</div>
						</div>
						
					</div>
				</div>
				<?php endfor; ?>
				<div class="max-auto col-12 col-sm-6 col-md-4 col-lg-3 scalable mb-3">
					<div class="mx-auto row col-md-12 supplier-block rounded p-5 text-center text-white" style="height: 100%;background: linear-gradient(to right bottom, #009688, #607D8B);cursor: pointer">
						<i class="fas fa-cart-plus fa-5x mx-auto"></i>			
						<h5 class="mx-auto">Add new product</h5>	
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
