<!DOCTYPE html>
<html>
<head>
	<title>Not found</title>
	<?= $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style']) ?>
</head>
<body class="bg-light">
	<div class="container">
		<div class="text-secondary col-mx-12 text-center mt-5">
			<h3><span class="font-weight-bold text-danger">404</span>, <?= __('Page not found') ?> :(</h3>
			<?= $this->Html->link(
	            __('Go back'),
	            ['controller' => 'Start', 
	            'action' => 'index'],[
	             '_full' => true, 
	             'escape' => false, 
	            'class' => 'btn btn-dark mt-3 pl-3 pr-3']
	        ).	$this->Html->image('2.png', ['class'=>'p-2 d-block mx-auto img-fluid', 'style' => 'object-fit: scale-down;max-height: calc(100vh - 250px)']) ?>
		</div>
	</div>
</body>
</html>

