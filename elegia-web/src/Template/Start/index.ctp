
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style']); ?>
</head>
<body>
	<div class="container-fluid bg-dark main-start" style="height: 100vh;position: fixed;top: 0;left: 0">
		<div class="container-fluid position-absolute" style="height: 80vh; display: flex;align-items: center;">
			<div class="container mx-auto" style="filter: drop-shadow(0 0 30px #191919);">
				<div class="row">
					<div class="col-md-12 text-center">
						<span style="background-color: #0000008a; color: white; padding: 12px; font-size: 30px; border-radius: 4px; display: inline-block; font-family: MontserratExtraBold">Erfreuen Sie Ihre Mitarbeiter</span>
					</div>
				</div>
				<div class="input-group mb-3" style="margin-bottom: 5px !important; margin-top: 7px;">
							
					<input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" type="text" class="form-control" placeholder="Tippe deine Stadt oder PLZ" aria-label="Tippe deine Stadt oder PLZ" aria-describedby="basic-addon2" style="padding: 16px">
					<div class="input-group-append">
						<button class="btn btn-outline-success bg-success text-white" 
								type="button" 
								onclick="window.location = '/search'" 
								style="padding-right: 25px;padding-left: 25px">
							<i class="fas fa-search"></i> Suchen
						</button>
					</div>
						
				</div>
				<div class="row">
					<div class="col-md-6 text-white" style="filter: drop-shadow(0 0 30px #191919);">
						z.B. Berlin, Hamburg, München usw. 
					</div>
					<div class="col-md-6 text-white text-right">
						<i class="fab fa-cc-visa fa-3x text-white"></i>
						<i class="fab fa-cc-mastercard fa-3x text-white"></i>
						<i class="fab fa-cc-paypal fa-3x text-white"></i>
					</div>
				</div>
			</div>
		</div>
		<!-- SEARCH END -->
	</div>

</body>
</html>