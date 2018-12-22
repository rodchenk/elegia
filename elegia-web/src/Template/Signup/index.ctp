<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<?= $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style']) ?>
</head>
<body class="bg-light">

	<div class="container-fluid row">
		
		<div class="col-md-6 row d-none d-md-flex">
			<div class="col-md-12 row">
				<div class="col-md-4"></div>
				<div class="col-md-8 text-right">
					<h1 class="text-left text-dark" style="padding: 30px;margin-top: 50px">Hey,</h1>
					<span class="text-secondary" style="font-size: 1.2em"><i class="fas fa-quote-left"></i> Sign up in one click, order fresh products from the best suppliers and make your employees <kbd class="bg-warning">happy</kbd> <i class="fas fa-quote-right"></i></span>
				</div>
			</div>
			<div class="col-md-12">
				<div class="p-relative">
					<?= $this->Html->image('6.png', ['class' => 'img-fluid mx-auto mt-3', 'style' => 'position: absolute;bottom:0']); ?>
				</div>
			</div>
			
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4" style="margin-top: 50px; padding: 14px; padding-top: 0;">
			<div class="row">
				<div class="col-md-12 text-center">
					<span class="d-block" style="padding: 30px;font-size: 1.5em;font-weight: bold;color: #c8495b">
						Sign up
					</span>
					<div class="custom-header-icons">
						<i class="fab fa-facebook fa-lg text-secondary" data-toggle="tooltip" data-placement="top" title="Facebook"></i>
						<i class="fab fa-google fa-lg text-secondary" data-toggle="tooltip" data-placement="top" title="Google"></i>
						<i class="fab fa-twitter fa-lg text-secondary" data-toggle="tooltip" data-placement="top" title="Twitter"></i>
					</div>
				</div>
			</div>
			
			<div class="row rounded-input">
				<!-- <form class="col" method="POST" action="/signup/add"> -->
				<?= $this->Form->create('user', array('action'=>'add', 'class'=>'col')) ?>
					<div class="col-md-12 mt-3">
						<div class="col input-group">
							<div class="input-group-prepend">
	    						<span class="input-group-text" id="basic-addon1"><i class="fas fa-signature"></i></span>
	  						</div>
					  		<input type="text" autocomplete="off" class="form-control" name="user_name" placeholder="Name" required>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<div class="col input-group">
							<div class="input-group-prepend">
	    						<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
	  						</div>
					  		<input type="text" autocomplete="off" class="form-control" name="user_city" placeholder="City" required>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<div class="col input-group">
							<div class="input-group-prepend">
	    						<span class="input-group-text" id="basic-addon1"><i class="far fa-envelope-open"></i></span>
	  						</div>
					  		<input type="text" autocomplete="off" class="form-control" name="user_email" placeholder="E-Mail" required>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<div class="col input-group">
							<div class="input-group-prepend">
	    						<span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
	  						</div>
					  		<input type="password" autocomplete="off" name="user_password" class="form-control" placeholder="Password" required>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<div class="col input-group">
							<div class="input-group-prepend">
	    						<span class="input-group-text" id="basic-addon1"><i class="fas fa-glasses"></i></span>
	  						</div>
					  		<input name="user_password_repeat" autocomplete="off" type="password" class="form-control" placeholder="Repeat Password" required>
						</div>
					</div>
					<div class="col-md-12 mt-5">
						<div class="row" style="margin-right: 1px; margin-left: 1px;">
							<div class="col text-right">
								<label class="switch-text-left d-inline-block selected-text-in-switch" id="switch-customer" for="switch-checkbox-signup">Customer</label>
							</div>
							<div class="col text-center mt-1">
								<label class="switch d-inline-block" style="background-color: #c2c7cc" for="switch-checkbox-signup">
									<input onchange="fun(this)" onload="this.value = false" type="checkbox" name="user_role" id="switch-checkbox-signup">
									<div class="bg-primary"></div>
								</label>
							</div>
							<div class="col text-left">
								<label class="switch-text-right d-inline-block" id="switch-supplier" for="switch-checkbox-signup">Supplier</label>	
							</div>
						</div>
					</div>
					<script type="text/javascript">
						function fun(e){
							let supplier = document.getElementById('switch-supplier');
							let customer = document.getElementById('switch-customer');
							if(e.checked){
								supplier.classList.add('selected-text-in-switch');
								customer.classList.remove('selected-text-in-switch');
							}else{
								customer.classList.add('selected-text-in-switch');
								supplier.classList.remove('selected-text-in-switch');
							}
							e.value = e.checked;
						}
					</script>
					<div class="col-md-12 mt-4">
						<div style="margin-left: 20px" class="custom-control custom-checkbox mr-sm-2">
							<input type="checkbox" class="custom-control-input" id="term-and-condition-checkbox" name="user_accepts_terms">
							<label class="ml-3 custom-control-label" for="term-and-condition-checkbox">I accept <a href="#">the Terms and Conditions</a></label>
						</div>
					</div>
					<div class="col-md-12 mt-3 mt-5 mb-3">
						<div class="row" style="margin-right: 1px; margin-left: 1px;">
							<div class="col-md-12 text-left">
								<button class="btn btn-primary border-radius-100" style="padding: 15px;padding-right: 25px; padding-left: 25px">Let's go!</button>
							</div>
						</div>
					</div>
				<?= $this->Form->end() ?>
			</div>				
		</div>
		<div class="col-md-1"></div>
	</div>
</body>
</html>