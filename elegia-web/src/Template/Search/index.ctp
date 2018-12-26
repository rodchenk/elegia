
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style', 'starability-checkmark.min']); ?>
</head>
<body>
	<div class="container-fluid mx-auto mt-5 row">
		<div class="col-md-3">
			<?= $this->Form->create(null, [
				'action' => 'index',
				'type' => 'get'
			]) ?>
				<div class="col-md-12 mb-2">
					<?= $this->Html->image('map.png', ['class'=>'img-fluid']) ?>		
				</div>
				<div class="col-md-12 mb-3">
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
					    		data-placement="top" 
					    		title="Terrible">3 stars</label>
					    <input type="radio" 
					    		id="rate4" 
					    		<?= isset($_GET['rating']) && $_GET['rating'] == 4 ? 'checked' : '' ?>
					    		name="rating" 
					    		value="4" />
					    <label for="rate4" 
					    		title="Very good"
					    		data-toggle="tooltip" 
					    		data-placement="top" 
					    		title="Terrible">4 stars</label>
						<input type="radio" 
								id="rate5" 
								name="rating"
								<?= isset($_GET['rating']) && $_GET['rating'] == 5 ? 'checked' : '' ?> 
								value="5" />
					    <label for="rate5" 
					    		title="Amazing"
					    		data-toggle="tooltip" 
					    		data-placement="top"
					    		title="Terrible">5 stars</label>
					</div>
				</div>
				<div class="col-md-12 mb-3 aktion-label">
					<span class="font-weight-bold d-block">Aktionen und Rabatte:</span>
	  				<input type="checkbox" name="discount" id="discount" <?= isset($_GET['discount']) ? 'checked' : '' ?>>
	  				<label class="mt-1 pb-2 pt-2 pl-4 pr-4 border-radius-100" for="discount">
	  					<i class="fas fa-tag"></i> Aktion
	  				</label>
				</div>
				<hr class="d-sm-none d-md-block col-md-12">
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
				<?php foreach($supplier as $entry): ?>
					<div class="col-md-12 border bg-white mb-2 rounded">
						<?= $entry->name ?>, Hello
					</div>
				<?php endforeach;?>
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