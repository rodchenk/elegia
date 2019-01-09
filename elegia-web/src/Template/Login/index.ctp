<div class="container">
	<div class="container-fluid">
		<div class="row">
			<div class="mx-auto border bg-white" style="margin-top: 100px; width: 400px; padding: 14px; padding-top: 0;">
				<div class="row">
					<div class="col-md-12 bg-coral text-center" style="height: 150px;background: linear-gradient(to right bottom, #f8d772, #f16f55)">
						<span class="text-white d-block" style="padding: 30px;font-size: 1.5em">
							<?= __('Log In') ?>
						</span>
						<div>
							<i class="fab fa-facebook fa-lg text-white" style="padding: 10px"></i>
							<i class="fab fa-google fa-lg text-white" style="padding: 10px"></i>
							<i class="fab fa-twitter fa-lg text-white" style="padding: 10px"></i>
						</div>
					</div>
				</div>
				<?= $this->Form->create('User', [
					'action'=>'login',
					'class'=>'row'
				]) ?>
					<div class="col-md-12 mt-5">
						<div class="col-md-12 input-group-lg login-form">
							<?= $this->Form->control('email', [
								'type' => 'text',
								'placeholder' => " ",
								'name' => 'email',
								'type' => 'text',
								'class' => 'form-control',
								'label' => false
							]); ?>
								<label style="z-index: 100;position: absolute;"><?= __('Email')?></label>
						</div>
					</div>
					<div class="col-md-12 mt-3 login-form">
						<div class="col-md-12 input-group-lg login-form">
							<?= $this->Form->control('password', [
								'name' => 'password',
								'placeholder' => " ",
								'type' => 'password',
								'class' => 'form-control',
								'label' => false
							]); ?>
								<label style="z-index: 100;position: absolute;"><?= __('Password')?></label>
						</div>
					</div>
					<div class="col-md-12 mt-1">
						<div class="col-md-12 text-right">
							<a href="#"><?= __('Forgot password')?>?</a>
						</div>
					</div>
					<div class="col-md-12 mt-3 mt-5 mb-3">
						<div class="row" style="margin-right: 1px; margin-left: 1px;">
							<div class="col-md-3 text-left">
								<?= $this->Form->submit(__('Log in'), [
									'class' => 'btn btn-primary border-radius-100',
									'style' => 'padding: 15px;padding-right: 25px; padding-left: 25px'
								]); ?>
							</div>
							<div class="col-md-9 mt-1 text-right">
								<span>
									<?= __("Don't have an account")?>?<br>
									<?= $this->Html->link(
										__('Sign up'),
										['controller' => 'Signup', 'action' => 'index', '_full' => true],
										['class' => 'font-weight-bold']); ?>
								</span>
							</div>
						</div>
					</div>
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>