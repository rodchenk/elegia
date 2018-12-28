
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style', 'starability-checkmark.min']); ?>
</head>
<body>
	<div class="container-fluid mt-1 top-map">
	</div>
	<div class="container-fluid mx-auto mt-3 row">
		<div class="col-md-3">
			<?= $this->Form->create(null, [
				'action' => 'index',
				'type' => 'get'
			]) ?>
				<!-- <div class="col-md-12 mb-2">
					<?php /* $this->Html->image('map.png', ['class'=>'img-fluid']) */ ?>
					https://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=600x300&maptype=roadmap
&markers=color:blue%7Clabel:S%7C40.702147,-74.015794&markers=color:green%7Clabel:G%7C40.711614,-74.012318
&markers=color:red%7Clabel:C%7C40.718217,-73.998284
&key=AIzaSyC0LTeqhT5V07BRGa1Xl33z8BpI21jgNKQ
				</div>-->
				<div class="col-md-12 mb-3 mt-2">
					<span class="font-weight-bold">City:</span>
	  				<input type="text" class="form-control mt-1 mb-2 ml-1" name="q" placeholder="Type your City" style="text-transform: capitalize;" value="<?= isset($_GET['q']) ? $_GET['q'] : '' ?>">
				</div>
				<div class="col-md-12 mb-3 text-dark">
					<span class="font-weight-bold">Rating:</span>
					<div class="col-md-12 ml-1 mt-1 mb-2 pb-2text-warning starability-checkmark">
						<input type="radio"
								id="rate1"
								name="rating"
								<?= isset($_GET['rating']) && $_GET['rating'] == 1 ? 'checked' : '' ?>
								value="1" />
					    <label for="rate1"
					    		data-toggle="tooltip"
					    		data-placement="top"
					    		title="Terrible">1 star</label>
					    <input type="radio"
					    		id="rate2"
					    		name="rating"
					    		<?= isset($_GET['rating']) && $_GET['rating'] == 2 ? 'checked' : '' ?>
					    		value="2" />
					    <label for="rate2"
					    		data-toggle="tooltip"
					    		data-placement="top"
					    		title="Not good">2 stars</label>
					    <input type="radio"
					    		id="rate3"
					    		name="rating"
					    		<?= isset($_GET['rating']) && $_GET['rating'] == 3 ? 'checked' : '' ?>
					    		value="3" />
					    <label for="rate3"
					    		title="Average"
					    		data-toggle="tooltip"
					    		data-placement="top">3 stars</label>
					    <input type="radio"
					    		id="rate4"
					    		<?= isset($_GET['rating']) && $_GET['rating'] == 4 ? 'checked' : '' ?>
					    		name="rating"
					    		value="4" />
					    <label for="rate4"
					    		title="Very good"
					    		data-toggle="tooltip"
					    		data-placement="top">4 stars</label>
						<input type="radio"
								id="rate5"
								name="rating"
								<?= isset($_GET['rating']) && $_GET['rating'] == 5 ? 'checked' : '' ?>
								value="5" />
					    <label for="rate5"
					    		title="Amazing"
					    		data-toggle="tooltip"
					    		data-placement="top">5 stars</label>
					</div>
				</div>
				<div class="col-md-12 mb-3 aktion-label">
					<span class="font-weight-bold d-block">Aktionen und Rabatte:</span>
	  				<input type="checkbox" name="discount" id="discount" <?= isset($_GET['discount']) ? 'checked' : '' ?>>
	  				<label class="mt-1 pb-2 pt-2 pl-4 pr-4 border-radius-100" for="discount">
	  					<i class="fas fa-tag"></i> Aktion
	  				</label>
				</div>
				<hr class="d-sm-none d-md-block col-md-8">
				<div class="col-md-12 mb-2">
					<?= $this->Form->submit(__('Click to refresh'), [
						'class' => 'btn btn-primary col-md-12 border-radius-100'
					]); ?>
				</div>
				<div class="col-md-12 mb-2 text-center">
					<?= $this->Html->link(
						'<i class="fas fa-undo-alt"></i>'.' '.__('Filter zurücksetzen'),
						['action' => 'index', 'q' => isset($_GET['q']) ? $_GET['q'] : '', '_full' => true],
						['class' => 'btn btn-link text-dark',
						'escape' => false
					]); ?>
				</div>
			<?= $this->Form->end() ?>
		</div>
		<div class="col-md-9">
			<?php if(sizeof($supplier)): /*TODO seems terrible*/?>
				<div class="text-center">
					<span class="m-2 d-block"><?= $this->Paginator->counter(['format' => __('Showing {{current}} record(s) out of {{count}} total')]) ?></span>
				</div>
				<?php foreach($supplier as $entry): /*supplier start TODO*/?>
					<!-- START -->
					<div class="col-md-12 border bg-white mb-2 rounded">
						<div class="row p-3">
							<div class="col-4 col-sm-6 col-md-2 col-lg-2 pl-0">
								<?= $this->Html->image('supplier/rewe.jpg', ['class'=>'img-fluid d-block mx-auto', 'style' => 'max-height: 100px']) ?>
							</div>
							<div class="col-8 col-sm-6 col-md-4 col-lg-3">
								<div class="col-md-12">
									<h4 class="font-weight-bold">
										<?= $this->Html->link(
											$entry->name,
											['controller' => 'user', 'action' => 'view', $entry->supplierID, '_full' => true],
											['class' => 'text-dark',
											'style' => 'text-decoration: none',
											'escape' => false
										]); ?>
										<i class="fas fa-check fa-xs" style="color: #ffcbba"></i>
									</h4>
									
								</div>
								<div class="col-md-12 text-nowrap"><?= $entry->city ?></div>
								<div class="col-md-12 text-warning text-nowrap">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
								</div>
							</div>
							<div class="d-none d-lg-block col-8 col-sm-8 col-md-5 col-lg-5 text-justify" style="overflow: hidden;max-height: 70px">
								<kbd class="text-dark font-weight-bold" style="background-color: #eaeaea"><?= __('About').' '.$entry->name ?></kbd> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud xercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-2">
								<div class="col-md-12 mt-2 p-0">
									<?= $this->Html->link(
										__('More info'),
										['controller' => 'user', 'action' => 'view', $entry->supplierID, '_full' => true],
										['class' => 'col-sm-12 btn btn-danger btn-md active',
										'role' => 'button',
										'aria-pressed' => 'true',
										'escape' => false
									]); ?>
								</div>
								<div class="d-none d-md-block col-md-12 mt-3 text-right text-dark text-nowrap text-center">
									<i class="fas fa-mortar-pestle fa-lg ml-2" data-toggle="tooltip" data-placement="top" title="Fruits"></i>
									<i class="fas fa-utensils fa-lg ml-2" data-toggle="tooltip" data-placement="top" title="Snacks"></i>
									<i class="fas fa-wine-glass fa-lg ml-2" data-toggle="tooltip" data-placement="top" title="Drinks"></i>
								</div>
							</div>
						</div>
					</div>
					<!-- END -->
				<?php endforeach; /*supplier end*/?>

				<div class="col-md-12 text-center">
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
			<?php else: ?>
				<div class="col-md-9 mx-auto text-left">
					<span style="font-size: 2rem" class="d-block text-dark">Nothing found for your request :(</span>
					<span class="d-block mb-5 text-left"><kbd class="bg-orange">Please try more general ciretias</kbd></span>
					<?= $this->Html->image('no_results_2.png', ['class'=>'img-fluid']) ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</body>
</html>
