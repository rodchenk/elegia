
<!DOCTYPE html>
<html>
<head>
	<title>elegia</title>
	<?php echo $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style']); ?>
</head>
<body>
	<main>
		<div class="container-fluid bg-dark main-start" style="height: 100vh">
			<!-- HEAD START -->
			<div class="container mx-auto row" style="padding-left: 0 !important">
				<div class="col-md-2 mt-3">
					<?= $this->Html->image('about/logologo.png', ['width'=>'150', 'height'=>'50']) ?>	
				</div>
				<div class="col-md-7 mx-auto mt-3">
					<ul class="nav justify-content-center">
					  	<li class="nav-item">
					    	<a class="nav-link active text-dark" href="/">Start</a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link text-dark" href="https://github.com/rodchenk/elegia">Github</a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link text-dark" href="/about">About</a>
					  	</li>
				  	</ul>
				</div>
				<div class="col-md-3 mt-3">
					<ul class="nav justify-content-center float-right">
						<li class="nav-item" style="border-radius: 100px">
							<a class="nav-link active text-dark" id="pills-home-tab" data-toggle="pill" href="/login" role="tab" aria-controls="pills-home" aria-selected="true">Log in</a>
						</li>
						<li class="nav-item bg-coral" style="border-radius: 100px">
							<a class="nav-link active text-white" id="pills-home-tab" data-toggle="pill" href="/signup" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-sign-in-alt"></i> Sign up</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- HEAD END -->
			<!-- SEARCH START -->
			<div class="container-fluid position-absolute" style="left:0;margin-top: 15%">
				<div class="container mx-auto" style="filter: drop-shadow(0 0 30px #191919);">
					<div class="row">
						<div class="col-md-12 text-center">
							<span style="background-color: #0000008a; color: white; padding: 12px; font-size: 30px; border-radius: 4px; display: inline-block; font-family: MontserratExtraBold">Erfreuen Sie Ihre Mitarbeiter</span>
						</div>
					</div>
					<div class="input-group mb-3" style="margin-bottom: 5px !important; margin-top: 7px;">
  						<input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" type="text" class="form-control" placeholder="Tippe deine Stadt oder PLZ" aria-label="Tippe deine Stadt oder PLZ" aria-describedby="basic-addon2" style="padding: 16px">
  						<div class="input-group-append">
    						<button class="btn btn-outline-success bg-success text-white" type="button" style="padding-right: 25px;padding-left: 25px"><i class="fas fa-search"></i> Suchen</button>
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
	</main>
</body>
</html>