<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<?= $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style']) ?>
</head>
<body class="bg-light">

	<div class="">
		<div class="mx-auto border bg-white" style="margin-top: 100px; width: 400px; padding: 14px; padding-top: 0;">
			<div class="row">
				<div class="col-md-12 bg-dark text-center" style="height: 150px;background: linear-gradient(to right bottom, #0062cc, #3294d1)">
					<span class="text-white d-block" style="padding: 30px;font-size: 1.5em">
						Sign up
					</span>
					<div class="custom-header-icons">
						<i class="fab fa-facebook fa-lg text-white" style="padding: 10px"></i>
						<i class="fab fa-google fa-lg text-white" style="padding: 10px"></i>
						<i class="fab fa-twitter fa-lg text-white" style="padding: 10px"></i>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 text-center mt-5 text-primary">
					<h3>Tell about yourself</h3>
				</div>
				<div class="col-md-12 mt-3">
					<!-- <div class="col-md-12 input-group-lg login-form">
						<input placeholder="Name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
						<label style="z-index: 100;position: absolute;">Name</label> 
					</div>-->
					<div class="col input-group">
				  		<input type="text" class="form-control" placeholder="Name">
					</div>
				</div>
				<div class="col-md-12 mt-3">
					<!--<div class="col-md-12 input-group-lg login-form">
						<input placeholder=" " type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
						<label style="z-index: 100;position: absolute;">E-Mail</label>
					</div>-->
					<div class="col input-group">
				  		<input type="text" class="form-control" placeholder="E-Mail">
					</div>
				</div>
				<div class="col-md-12 mt-3 login-form">
					<!-- <div class="col-md-12 input-group-lg login-form">
						<input placeholder=" " type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
						<label style="z-index: 100;position: absolute;">Password</label>
					</div> -->
					<div class="col input-group">
				  		<input type="password" class="form-control" placeholder="Password">
					</div>
				</div>
				<div class="col-md-12 mt-3 login-form">
					<!-- <div class="col-md-12 input-group-lg login-form">
						<input placeholder=" " type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
						<label style="z-index: 100;position: absolute;">Repeat password</label>
					</div> -->
					<div class="col input-group">
				  		<input type="password" class="form-control" placeholder="Repeat Password">
					</div>
				</div>
				<div class="col-md-12 mt-5">
					<div class="row" style="margin-right: 1px; margin-left: 1px;">
						<div class="col-md-4">
							<label class="switch-text-left d-inline-block selected-text-in-switch" id="switch-customer" for="switch-checkbox-signup">Customer</label>
						</div>
						<div class="col-md-4 text-center mt-1">
							<label class="switch d-inline-block" style="background-color: #c2c7cc" for="switch-checkbox-signup">
								<input onchange="fun(this)" type="checkbox" id="switch-checkbox-signup">
								<div  class="bg-primary"></div>
							</label>
						</div>
						<div class="col-md-4 text-right">
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
					}
				</script>
				<div class="col-md-12 mt-4">
					<div style="margin-left: 20px" class="custom-control custom-checkbox mr-sm-2">
						<input type="checkbox" class="custom-control-input" id="term-and-condition-checkbox" name="">
						<label class="ml-3 custom-control-label" for="term-and-condition-checkbox">I accept <a href="#">the Terms and Conditions</a></label>
					</div>
				</div>
				<div class="col-md-12 mt-3 mt-5 mb-3">
					<div class="row" style="margin-right: 1px; margin-left: 1px;">
						<div class="col-md-12 text-right">
							<button class="btn btn-primary border-radius-100" style="padding: 15px;padding-right: 25px; padding-left: 25px">Let's go!</button>
						</div>
					</div>
				</div>
			</div>				
		</div>
	</div>
</body>
</html>