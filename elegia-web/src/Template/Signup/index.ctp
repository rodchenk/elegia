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
			<?= $this->Form->create('user', array('action'=>'add', 'class'=>'col')) ?>
				<div class="col-md-12 mt-3">
					<div class="col input-group">
						<div class="input-group-prepend">
    						<span class="input-group-text" id="basic-addon1"><i class="fas fa-signature"></i></span>
  						</div>
				  		<?= $this->Form->input('name', [
				  			'name' => 'user_name', 
				  			'autocomplete' => 'off', 
				  			'required', 
				  			'placeholder' => "Name", 
				  			'type' => 'text', 
				  			'class' => 'form-control', 
				  			'label' => false
				  		]); ?>
					</div>
				</div>
				<div class="col-md-12 mt-3">
					<div class="col input-group">
						<div class="input-group-prepend">
    						<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
  						</div>
  						<datalist id="cities"></datalist>
  						<?= $this->Form->input('city', [
  							'name' => 'user_city', 
  							'onkeyup' => 'search(this.value)', 
  							'list' => 'cities', 
  							'autocomplete' => 'off', 
  							'required', 
  							'placeholder' => 'City', 
  							'class' => 'form-control', 
  							'label' => false
  						]); ?>
					</div>
				</div>
				<script type="text/javascript">
					function search(keyword){
						let search = keyword;
						$.ajax({
							method: 'GET',
							url: "<?= $this->Url->build(['controller' => 'Signup', 'action' => 'search']) ?>",
							type: 'json',
							data: {keyword:search},
							success: function(e){$('#cities').html(e);}
						});
					}
				</script>
				<div class="col-md-12 mt-3">
					<div class="col input-group">
						<div class="input-group-prepend">
    						<span class="input-group-text" id="basic-addon1"><i class="far fa-envelope-open"></i></span>
  						</div>
				  		<?= $this->Form->input('email', [
  							'name' => 'user_email',  
  							'autocomplete' => 'off', 
  							'required', 
  							'placeholder' => 'E-Mail', 
  							'class' => 'form-control', 
  							'label' => false
  						]); ?>
					</div>
				</div>
				<div class="col-md-12 mt-3">
					<div class="col input-group">
						<div class="input-group-prepend">
    						<span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
  						</div>
				  		<?= $this->Form->input('password', [
  							'name' => 'user_password',  
  							'autocomplete' => 'off', 
  							'required', 
  							'type' => 'password',
  							'placeholder' => 'Password', 
  							'class' => 'form-control', 
  							'label' => false
  						]); ?>
					</div>
				</div>
				<div class="col-md-12 mt-3">
					<div class="col input-group">
						<div class="input-group-prepend">
    						<span class="input-group-text" id="basic-addon1"><i class="fas fa-glasses"></i></span>
  						</div>
				  		<?= $this->Form->input('password_repeat', [
  							'name' => 'user_password_repeat',  
  							'autocomplete' => 'off', 
  							'required', 
  							'type' => 'password',
  							'placeholder' => 'Repeat password', 
  							'class' => 'form-control', 
  							'label' => false
  						]); ?>
					</div>
				</div>
				<div class="col-md-12 mt-5">
					<div class="row" style="margin-right: 1px; margin-left: 1px;">
						<div class="col text-right">
							<label class="switch-text-left d-inline-block selected-text-in-switch" id="switch-customer" for="switch-checkbox-signup">Customer</label>
						</div>
						<div class="col text-center mt-1">
							<label class="switch d-inline-block" style="background-color: #c2c7cc" for="switch-checkbox-signup">
								<?= $this->Form->input('city', [
		  							'name' => 'user_role',
		  							'type' => 'checkbox',
		  							'id' => 'switch-checkbox-signup',
		  							'onchange' => 'fun(this)',
		  							'label' => false
		  						]); ?>
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
						<?= $this->Form->input('city', [
  							'name' => 'user_accepts_terms',
  							'class' => 'custom-control-input',
  							'type' => 'checkbox',
  							'id' => 'term-and-condition-checkbox',
  							'label' => false
  						]); ?>
						<label class="ml-3 custom-control-label" for="term-and-condition-checkbox">I accept <a href="#">the Terms and Conditions</a></label>
					</div>
				</div>
				<div class="col-md-12 mt-3 mt-5 mb-3">
					<div class="row" style="margin-right: 1px; margin-left: 1px;">
						<div class="col-md-12 text-left">
							<?= $this->Form->button(__("Let's go!"), ['style' => 'padding: 15px;padding-right: 25px; padding-left: 25px', 'class' => 'btn btn-primary border-radius-100']) ?>
						</div>
					</div>
				</div>
			<?= $this->Form->end() ?>
		</div>				
	</div>
	<div class="col-md-1"></div>
</div>